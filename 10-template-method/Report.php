<?php
abstract class Report {
    final public function generateReport(): void {
        $this->generateHeader(); $this->retrieveData(); $this->formatData(); $this->generateFooter();
    }
    protected function generateHeader(): void {
        echo '<h3>========================<br>'.htmlspecialchars($this->getTitle()).'<br>========================</h3>';
    }
    abstract protected function getTitle(): string;
    abstract protected function retrieveData(): void;
    abstract protected function formatData(): void;
    protected function generateFooter(): void { echo '<br>========================<br>END OF REPORT<br>========================<br>'; }
}
