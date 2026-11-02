<?php
class StudentContext {
    private array $student;
    public function __construct(array $student) { $this->student = $student; }
    public function getStudent(): array { return $this->student; }
}
