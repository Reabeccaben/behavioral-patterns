<?php
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Faculty.php';
require_once __DIR__ . '/Alumni.php';
require_once __DIR__ . '/CSVExportVisitor.php';
require_once __DIR__ . '/ReportVisitor.php';
require_once __DIR__ . '/StatisticsVisitor.php';
$records=[new Student('Valerie'),new Faculty('Reabeccaben'),new Alumni('Christianne')];
echo '<h2>Student Record Operations</h2><b>CSV Export Visitor</b><br>';
$csv=new CSVExportVisitor(); foreach ($records as $record) $record->accept($csv);
echo '<br><b>Report Visitor</b><br>';
$report=new ReportVisitor(); foreach ($records as $record) $record->accept($report);
echo '<br><b>Statistics Visitor</b><br>';
$stats=new StatisticsVisitor(); foreach ($records as $record) $record->accept($stats);
?>
