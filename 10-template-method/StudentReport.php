<?php
require_once __DIR__ . '/Report.php';
class StudentReport extends Report {
    private array $student=[];
    protected function getTitle(): string { return 'STUDENT REPORT'; }
    protected function retrieveData(): void { $this->student=['id'=>'2024-2553','name'=>'Reabeccaben Sercedillo','program'=>'BSIT']; }
    protected function formatData(): void {
        echo 'Student ID: '.htmlspecialchars($this->student['id']).'<br><br>Name: '.htmlspecialchars($this->student['name']).'<br><br>Program: '.htmlspecialchars($this->student['program']).'<br>';
    }
}
