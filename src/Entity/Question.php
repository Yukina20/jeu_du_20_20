<?php

namespace Dubuc\Entity;

use DateTimeImmutable;

class Question
{
    private ?int $id;

    private int $level;

    private string $contentText;

    private ?string $contentCode = null;

    private ?string $contentImage = null;

    private bool $isToBeRevised = false;

    private DateTimeImmutable $createdAt;

    private ?DateTimeImmutable $reviseAdt = null;

    public function __construct()
    {
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

    public function setLevel(int $level): Question
    {
        $this->level = $level;

        return $this;
    }

    public function getContentText(): string
    {
        return $this->contentText;
    }

    public function setContentText(string $contentText): Question
    {
        $this->contentText = $contentText;

        return $this;
    }

    public function getContentCode(): ?string
    {
        return $this->contentCode;
    }

    public function setContentCode(?string $contentCode): Question
    {
        $this->contentCode = $contentCode;

        return $this;
    }

    public function getContentImage(): ?string
    {
        return $this->contentImage;
    }

    public function setContentImage(?string $contentImage): Question
    {
        $this->contentImage = $contentImage;

        return $this;
    }

    public function isToBeRevised(): bool
    {
        return $this->isToBeRevised;
    }

    public function setIsToBeRevised(bool $isToBeRevised): Question
    {
        $this->isToBeRevised = $isToBeRevised;

        return $this;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): Question
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getReviseAdt(): ?DateTimeImmutable
    {
        return $this->reviseAdt;
    }

    public function setReviseAdt(?DateTimeImmutable $reviseAdt): Question
    {
        $this->reviseAdt = $reviseAdt;

        return $this;
    }







}