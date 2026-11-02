<?php
require_once __DIR__ . '/StudentState.php';
class ApplicantState implements StudentState {
    public function getName(): string { return 'Applicant'; }
    public function enroll(): string { return 'Student must complete pre-assessment first.'; }
}
