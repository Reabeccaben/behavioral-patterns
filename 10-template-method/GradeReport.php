<?php
require_once __DIR__ . '/Report.php';
class GradeReport extends Report {
    private array $grades=[];
    protected function getTitle(): string { return 'GRADE REPORT'; }
    protected function retrieveData(): void { $this->grades=['Programming'=>1.75,'Database'=>1.50]; }
    protected function formatData(): void { foreach ($this->grades as $subject=>$grade) echo htmlspecialchars($subject).': '.number_format($grade,2).'<br>'; }
}
