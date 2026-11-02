<?php
require_once __DIR__ . '/StudentCollection.php';

$students = new StudentCollection();

$students->add(new Student('2024-2553', 'Reabeccaben Sercedillo'));
$students->add(new Student('2024-2554', 'Christianne Linterna'));
$students->add(new Student('2024-2555', 'Valerie Asaias'));

echo '<h2>Student Record Collection</h2>';
echo '<strong>Student List</strong><br>';

foreach ($students as $student) {
    echo htmlspecialchars($student->getStudentId()) . ' - '
       . htmlspecialchars($student->getName()) . '<br>';
}
?>
