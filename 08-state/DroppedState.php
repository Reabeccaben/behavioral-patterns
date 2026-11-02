<?php
require_once __DIR__ . '/StudentState.php';
class DroppedState implements StudentState {
    public function getName(): string { return 'Dropped'; }
    public function enroll(): string { return 'Dropped student must contact the Registrar to re-enroll.'; }
}
