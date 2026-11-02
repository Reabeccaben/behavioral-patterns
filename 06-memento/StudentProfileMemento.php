<?php
class StudentProfileMemento
{
    private string $name;
    private string $program;
    private int $yearLevel;
    private string $email;

    public function __construct(string $name, string $program, int $yearLevel, string $email)
    {
        $this->name = $name;
        $this->program = $program;
        $this->yearLevel = $yearLevel;
        $this->email = $email;
    }

    public function getName(): string { return $this->name; }
    public function getProgram(): string { return $this->program; }
    public function getYearLevel(): int { return $this->yearLevel; }
    public function getEmail(): string { return $this->email; }
}
