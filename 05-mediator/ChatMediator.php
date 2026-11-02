<?php
interface ChatMediator
{
    public function addStudent(Student $student): void;
    public function sendMessage(string $message, Student $sender): void;
}
