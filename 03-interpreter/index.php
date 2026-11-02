<?php
require_once __DIR__ . '/StudentContext.php';
require_once __DIR__ . '/TerminalExpression.php';
require_once __DIR__ . '/AndExpression.php';
require_once __DIR__ . '/OrExpression.php';
$students = [
 new StudentContext(['NAME'=>'Reabeccaben','PROGRAM'=>'BSIT','YEAR'=>4]),
 new StudentContext(['NAME'=>'Christianne','PROGRAM'=>'BSCS','YEAR'=>3]),
 new StudentContext(['NAME'=>'Jeizel','PROGRAM'=>'BSIT','YEAR'=>3])
];
$and = new AndExpression(new TerminalExpression('PROGRAM','BSIT'), new TerminalExpression('YEAR',4));
$or = new OrExpression(new TerminalExpression('PROGRAM','BSIT'), new TerminalExpression('PROGRAM','BSCS'));
echo '<h2>Student Search/Query System</h2><b>Expression:</b> PROGRAM = "BSIT" AND YEAR = 4<br><b>Matching students:</b><br>';
foreach ($students as $ctx) { $s=$ctx->getStudent(); if ($and->interpret($s)) echo htmlspecialchars($s['NAME']).' - '.$s['PROGRAM'].', Year '.$s['YEAR'].'<br>'; }
echo '<br><b>Expression:</b> PROGRAM = "BSIT" OR PROGRAM = "BSCS"<br><b>Matching students:</b><br>';
foreach ($students as $ctx) { $s=$ctx->getStudent(); if ($or->interpret($s)) echo htmlspecialchars($s['NAME']).'<br>'; }
?>
