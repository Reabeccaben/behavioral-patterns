<?php
require_once __DIR__ . '/StudentProfileMemento.php';

class StudentProfile
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

    public function updateProfile(string $program, int $yearLevel): void
    {
        $this->program = $program;
        $this->yearLevel = $yearLevel;
    }

    // Save the current state in a Memento object.
    public function save(): StudentProfileMemento
    {
        return new StudentProfileMemento(
            $this->name,
            $this->program,
            $this->yearLevel,
            $this->email
        );
    }

    // Restore the profile from a previously saved Memento.
    public function restore(StudentProfileMemento $memento): void
    {
        $this->name = $memento->getName();
        $this->program = $memento->getProgram();
        $this->yearLevel = $memento->getYearLevel();
        $this->email = $memento->getEmail();
    }

    public function display(): void
    {
        echo 'Name: ' . htmlspecialchars($this->name) . '<br>';
        echo 'Program: ' . htmlspecialchars($this->program) . '<br>';
        echo 'Year: ' . $this->yearLevel . '<br>';
        echo 'Email: ' . htmlspecialchars($this->email) . '<br>';
    }
}
