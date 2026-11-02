<?php
require_once __DIR__ . '/StudentState.php';
class EnrolledState implements StudentState {
    public function getName(): string { return 'Enrolled'; }
    public function enroll(): string { return 'Student is already enrolled.'; }
}
