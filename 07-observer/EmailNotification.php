<?php
require_once __DIR__ . '/Observer.php';
class EmailNotification implements Observer {
    public function update(float $grade): void {
        echo 'Email Notification:<br>Your grade has been updated to '.number_format($grade,2).'<br><br>';
    }
}
