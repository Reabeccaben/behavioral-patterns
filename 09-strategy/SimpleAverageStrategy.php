<?php
require_once __DIR__ . '/GradeStrategy.php';
class SimpleAverageStrategy implements GradeStrategy {
    public function calculate(array $grades): float { return count($grades) ? array_sum($grades)/count($grades) : 0.0; }
    public function getName(): string { return 'Simple Average'; }
}
