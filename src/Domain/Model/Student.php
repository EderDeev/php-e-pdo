<?php

namespace  src\Domain\Model;

class Student
{
    private string $name;
    private ?int $id;
    private \DateTimeInterface $birthDate;

    public function __construct(?int $id, string $name, \DateTimeInterface $birthday
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthday;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBirthdate(): DateTimeImmutable
    {
        return $this->birthDate;
    }

    public function getAge(): int
    {
        return $this->birthDate->diff(new \DateTimeImmutable())->y;
    }
}
