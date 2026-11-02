<?php
require_once __DIR__ . '/ChatMediator.php';

class SimpleChatMediator implements ChatMediator
{
    private array $students = [];

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function sendMessage(string $message, Student $sender): void
    {
        foreach ($this->students as $student) {
            // Do not send the message back to its sender.
            if ($student !== $sender) {
                $student->receive($message, $sender->getName());
            }
        }
    }
}
