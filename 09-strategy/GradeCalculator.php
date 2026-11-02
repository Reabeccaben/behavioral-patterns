<?php
require_once __DIR__ . '/GradeStrategy.php';
class GradeCalculator {
    private GradeStrategy $strategy;
    public function __construct(GradeStrategy $strategy) { $this->strategy=$strategy; }
    public function setStrategy(GradeStrategy $strategy): void { $this->strategy=$strategy; }
    public function calculate(array $grades): float { return $this->strategy->calculate($grades); }
    public function getStrategyName(): string { return $this->strategy->getName(); }
}
