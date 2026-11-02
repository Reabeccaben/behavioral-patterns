<?php
require_once __DIR__ . '/ChatMediator.php';

class Student
{
    private string $name;
    private ChatMediator $mediator;

    public function __construct(string $name, ChatMediator $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
        $this->mediator->addStudent($this);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): void
    {
        echo htmlspecialchars($this->name) . ': '
           . htmlspecialchars($message) . '<br>';
        $this->mediator->sendMessage($message, $this);
    }

    public function receive(string $message, string $senderName): void
    {
        echo htmlspecialchars($this->name) . ' receives:<br>';
        echo htmlspecialchars($senderName) . ': '
           . htmlspecialchars($message) . '<br><br>';
    }
}
