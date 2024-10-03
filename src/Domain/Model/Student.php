<?php



class Student
{
    private string $name;
    private ?int $id;
    private \DateTimeInterface $birthday;

    public function __construct(?int $id, string $name, \DateTimeInterface $birthday
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBirthday(): DateTimeImmutable
    {
        return $this->birthday;
    }
}
