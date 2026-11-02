<?php
class Student
{
    private string $studentId;
    private string $name;

    public function __construct(string $studentId, string $name)
    {
        $this->studentId = $studentId;
        $this->name = $name;
    }

    public function getStudentId(): string
    {
        return $this->studentId;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
