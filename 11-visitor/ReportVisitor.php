<?php
require_once __DIR__ . '/Visitor.php';
class ReportVisitor implements Visitor {
    public function visitStudent(Student $student): void { echo 'Student report generated for: '.htmlspecialchars($student->getName()).'.<br>'; }
    public function visitFaculty(Faculty $faculty): void { echo 'Faculty report generated for: '.htmlspecialchars($faculty->getName()).'.<br>'; }
    public function visitAlumni(Alumni $alumni): void { echo 'Alumni report generated for: '.htmlspecialchars($alumni->getName()).'.<br>'; }
}
