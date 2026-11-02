<?php
require_once __DIR__ . '/StudentState.php';
class Student {
    private StudentState $state;
    public function __construct(StudentState $state) { $this->state=$state; }
    public function setState(StudentState $state): void { $this->state=$state; }
    public function getStateName(): string { return $this->state->getName(); }
    public function enroll(): string { return $this->state->enroll(); }
}
