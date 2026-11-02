<?php
require_once __DIR__ . '/Observer.php';
class ParentNotification implements Observer {
    public function update(float $grade): void {
        echo 'Parent Notification:<br>Student grade has been posted: '.number_format($grade,2).'<br><br>';
    }
}
