<?php
require_once __DIR__ . '/GradeSystem.php';
require_once __DIR__ . '/StudentPortal.php';
require_once __DIR__ . '/EmailNotification.php';
require_once __DIR__ . '/ParentNotification.php';
$system=new GradeSystem();
$system->attach(new StudentPortal()); $system->attach(new EmailNotification()); $system->attach(new ParentNotification());
echo '<h2>Grade Notification System</h2>'; $system->setGrade(1.75);
?>
