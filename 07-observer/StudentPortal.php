<?php
require_once __DIR__ . '/Observer.php';
class StudentPortal implements Observer {
    public function update(float $grade): void {
        echo 'Student Portal:<br>New grade posted: '.number_format($grade,2).'<br><br>';
    }
}
