<?php
require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/StudentSystem.php';
class EnrollCommand implements Command {
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }
    public function execute(): void { $this->system->enrollStudent(); }
    public function undo(): void { echo "Enrollment action undone.<br>"; }
}
