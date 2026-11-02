<?php
require_once __DIR__ . '/Visitor.php';
class StatisticsVisitor implements Visitor {
    public function visitStudent(Student $student): void { echo 'Student statistics calculated for: '.htmlspecialchars($student->getName()).'.<br>'; }
    public function visitFaculty(Faculty $faculty): void { echo 'Faculty statistics calculated for: '.htmlspecialchars($faculty->getName()).'.<br>'; }
    public function visitAlumni(Alumni $alumni): void { echo 'Alumni statistics calculated for: '.htmlspecialchars($alumni->getName()).'.<br>'; }
}
