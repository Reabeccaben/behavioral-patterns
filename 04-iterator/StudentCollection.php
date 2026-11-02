<?php
require_once __DIR__ . '/Student.php';

class StudentCollection implements IteratorAggregate
{
    private array $students = [];

    public function add(Student $student): void
    {
        $this->students[] = $student;
    }

    // Return an iterator instead of exposing the internal array.
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->students);
    }
}
