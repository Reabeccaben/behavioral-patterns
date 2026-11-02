<?php
require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/StudentSystem.php';
class LogoutCommand implements Command {
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }
    public function execute(): void { $this->system->logout(); }
    public function undo(): void { echo "Logout action cannot be reversed.<br>"; }
}
