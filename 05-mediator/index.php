<?php
require_once __DIR__ . '/SimpleChatMediator.php';
require_once __DIR__ . '/Student.php';

$chatRoom = new SimpleChatMediator();

$reabeccaben = new Student('Reabeccaben', $chatRoom);
$christianne = new Student('Christianne', $chatRoom);
$valerie = new Student('Valerie', $chatRoom);

echo '<h2>Student Communication System</h2>';
$reabeccaben->send('Hello everyone!');
$christianne->send('Hi Reabeccaben!');
$valerie->send('Hey, everyone! What\'s up?');
?>
