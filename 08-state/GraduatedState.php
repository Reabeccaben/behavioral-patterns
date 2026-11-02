<?php
require_once __DIR__ . '/StudentState.php';
class GraduatedState implements StudentState {
    public function getName(): string { return 'Graduated'; }
    public function enroll(): string { return 'Graduated students cannot enroll again in this program.'; }
}
