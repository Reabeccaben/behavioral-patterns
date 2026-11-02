<?php
require_once __DIR__ . '/StudentSystem.php';
require_once __DIR__ . '/EnrollCommand.php';
require_once __DIR__ . '/DropSubjectCommand.php';
require_once __DIR__ . '/PrintRegistrationCommand.php';
require_once __DIR__ . '/LogoutCommand.php';
require_once __DIR__ . '/Invoker.php';
$system = new StudentSystem(); $invoker = new Invoker();
echo '<h2>Student System Actions</h2>';
echo '<b>Executing: Enroll Student</b><br>'; $invoker->executeCommand(new EnrollCommand($system));
echo '<br><b>Executing: Drop Subject</b><br>'; $invoker->executeCommand(new DropSubjectCommand($system));
echo '<br><b>Executing: Print Registration</b><br>'; $invoker->executeCommand(new PrintRegistrationCommand($system));
echo '<br><b>Executing: Logout</b><br>'; $invoker->executeCommand(new LogoutCommand($system));
echo '<br><b>Undo last command:</b><br>'; $invoker->undo();
?>
