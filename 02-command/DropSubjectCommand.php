<?php
require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/StudentSystem.php';
class DropSubjectCommand implements Command {
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }
    public function execute(): void { $this->system->dropSubject(); }
    public function undo(): void { echo "Drop subject action undone.<br>"; }
}
