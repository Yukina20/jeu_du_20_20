<?php

namespace Dubuc\Entity;

use DateTimeImmutable;

class Answer
{

    private ?int $id;

    private string $contentText;
    private ?string $contentCode = null;
    private ?string $contentImage = null;
    private bool $isTrue = false;
    private dateTimeImmutable $createdAt;
    private ?dateTimeImmutable $revisedAt = null;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContentText(): string
    {
        return $this->contentText;
    }

    public function setContentText(string $contentText): Answer
    {
        $this->contentText = $contentText;
        return $this;
    }

    public function getContentCode(): ?string
    {
        return $this->contentCode;
    }

    public function setContentCode(?string $contentCode): Answer
    {
        $this->contentCode = $contentCode;
        return $this;
    }

    public function getContentImage(): ?string
    {
        return $this->contentImage;
    }

    public function setContentImage(?string $contentImage): Answer
    {
        $this->contentImage = $contentImage;
        return $this;
    }

    public function isTrue(): bool
    {
        return $this->isTrue;
    }

    public function setIsTrue(bool $isTrue): Answer
    {
        $this->isTrue = $isTrue;
        return $this;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): Answer
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getRevisedAt(): ?DateTimeImmutable
    {
        return $this->revisedAt;
    }

    public function setRevisedAt(?DateTimeImmutable $revisedAt): Answer
    {
        $this->revisedAt = $revisedAt;
        return $this;
    }

    public function __toString(): string
    {
        return "ID: " . ($this->id ?? 'null') . "<br>\n" .
            "Content Text: " . $this->contentText . "<br>\n" .
            "Content Code: " . ($this->contentCode ?? 'null') . "<br>\n" .
            "Content Image: " . ($this->contentImage ?? 'null') . "<br>\n" .
            "Is True: " . ($this->isTrue ? 'true' : 'false') . "<br>\n" .
            "Created At: " . $this->createdAt->format('Y-m-d H:i:s') . "<br>\n" .
            "Revised At: " . ($this->revisedAt ? $this->revisedAt->format('Y-m-d
H:i:s') : 'null') . "<br>\n";


    }
}