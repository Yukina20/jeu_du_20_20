<?php

namespace Dubuc\Entity;

use DateTimeImmutable;
use InvalidArgumentException;
use RuntimeException;

class Question
{
    private ?int $id;
    private int $level;
    private string $contentText;
    private DateTimeImmutable $createdAt;
    private ?DateTimeImmutable $revisedAt = null;
    private array $answers = []; // Tableau pour stocker les réponses

    public function __construct(string $contentText, int $level)
    {
        $this->contentText = $contentText;
        $this->level = $level;
        $this->createdAt = new DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        if ($level < 1 || $level > 20) {
            throw new InvalidArgumentException('Le niveau doit être compris entre 1 et 20.');
        }
        $this->level = $level;
        return $this;
    }

    public function getContentText(): string
    {
        return $this->contentText;
    }

    public function setContentText(string $contentText): self
    {
        $this->contentText = $contentText;
        return $this;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getRevisedAt(): ?DateTimeImmutable
    {
        return $this->revisedAt;
    }

    public function setRevisedAt(?DateTimeImmutable $revisedAt): self
    {
        $this->revisedAt = $revisedAt;
        return $this;
    }

    // Ajouter une seule réponse
    public function addAnswer(Answer $answer): self
    {
        if (count($this->answers) >= 4) {
            throw new RuntimeException('Une question ne peut pas avoir plus de 4 réponses.');
        }
        $this->answers[] = $answer;
        return $this;
    }

    // Associer une collection de réponses
    public function setAnswers(array $answers): self
    {
        // Vérifier si la collection contient 4 réponses
        if (count($answers) !== 4) {
            throw new InvalidArgumentException('Une question doit être associée à exactement 4 réponses.');
        }

        // Vérifier que chaque élément est du type Answer
        foreach ($answers as $answer) {
            if (!$answer instanceof Answer) {
                throw new InvalidArgumentException('Chaque élément de la collection doit être une instance de Answer.');
            }
        }

        // Vérifier qu'il y a une seule bonne réponse
        $correctAnswers = array_filter($answers, fn(Answer $a) => $a->isTrue());
        if (count($correctAnswers) !== 1) {
            throw new RuntimeException('Il doit y avoir exactement une bonne réponse dans la collection.');
        }

        // Si tout est correct, on associe les réponses
        $this->answers = $answers;
        return $this;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function __toString(): string
    {
        return "ID: " . ($this->id ?? 'null') . "<br>\n" .
            "Level: " . $this->level . "<br>\n" .
            "Content Text: " . $this->contentText . "<br>\n" .
            "Created At: " . $this->createdAt->format('Y-m-d H:i:s') . "<br>\n" .
            "Revised At: " . ($this->revisedAt ? $this->revisedAt->format('Y-m-d H:i:s') : 'null') . "<br>\n" .
            "Answers Count: " . count($this->answers) . "<br>\n";
    }
}
