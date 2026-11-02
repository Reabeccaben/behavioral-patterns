<?php
require_once __DIR__ . '/Report.php';
class EnrollmentReport extends Report {
    private array $data=[];
    protected function getTitle(): string 
    { return 'ENROLLMENT REPORT'; 
    
    }
    protected function retrieveData(): void
     { $this->data=['Student ID'=>'2024-2553','Program'=>'BSIT','Status'=>'Enrolled']; }
    protected function formatData(): void { foreach ($this->data as $label=>$value) 
    echo htmlspecialchars($label).': '.htmlspecialchars($value).'<br>'; }
}
