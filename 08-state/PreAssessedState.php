<?php
require_once __DIR__ . '/StudentState.php';
class PreAssessedState implements StudentState {
    public function getName(): string { return 'Pre-Assessed'; }
    public function enroll(): string { return 'Student successfully enrolled.'; }
}
