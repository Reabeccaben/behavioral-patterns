<?php
require_once __DIR__ . '/StudentAffairsHandler.php';
require_once __DIR__ . '/RegistrarHandler.php';
require_once __DIR__ . '/FinanceHandler.php';
require_once __DIR__ . '/ICTHandler.php';

// Arrange the handlers in the required order.
$studentAffairs = new StudentAffairsHandler();
$registrar = new RegistrarHandler();
$finance = new FinanceHandler();
$ict = new ICTHandler();

$studentAffairs->setNext($registrar)
               ->setNext($finance)
               ->setNext($ict);

$requests = [
    'Transcript of Records',
    'Student ID Concern',
    'Good Moral Certificate'
];

echo '<h2>Student Request Processing System</h2>';

foreach ($requests as $request) {
    echo '<strong>Request: ' . htmlspecialchars($request) . '</strong><br>';
    $studentAffairs->handle($request);
    echo '<hr>';
}
?>
