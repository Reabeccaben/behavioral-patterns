<?php
require_once __DIR__ . '/Command.php';
class Invoker {
    private ?Command $lastCommand = null;
    public function executeCommand(Command $command): void {
        $this->lastCommand = $command;
        $command->execute();
    }
    public function undo(): void {
        if ($this->lastCommand === null) { echo "There is no action to undo.<br>"; return; }
        $this->lastCommand->undo();
        $this->lastCommand = null;
    }
}
