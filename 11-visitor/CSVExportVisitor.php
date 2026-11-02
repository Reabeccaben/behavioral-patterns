<?php
require_once __DIR__ . '/Visitor.php';
class CSVExportVisitor implements Visitor {
    public function visitStudent(Student $student): void { echo 'Student exported: '.htmlspecialchars($student->getName()).'.<br>'; }
    public function visitFaculty(Faculty $faculty): void { echo 'Faculty exported: '.htmlspecialchars($faculty->getName()).'.<br>'; }
    public function visitAlumni(Alumni $alumni): void { echo 'Alumni exported: '.htmlspecialchars($alumni->getName()).'.<br>'; }
}
