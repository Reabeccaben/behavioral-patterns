<?php
require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/StudentSystem.php';
class PrintRegistrationCommand implements Command {
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }
    public function execute(): void { $this->system->printRegistration(); }
    public function undo(): void { echo "Print registration cannot be reversed.<br>"; }
}
