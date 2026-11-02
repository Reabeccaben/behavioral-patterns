<?php
require_once __DIR__ . '/StudentReport.php';
require_once __DIR__ . '/GradeReport.php';
require_once __DIR__ . '/EnrollmentReport.php';
echo '<h2>Student Report Generation</h2>';
(new StudentReport())->generateReport(); echo '<br>';
(new GradeReport())->generateReport(); echo '<br>';
(new EnrollmentReport())->generateReport();
?>
