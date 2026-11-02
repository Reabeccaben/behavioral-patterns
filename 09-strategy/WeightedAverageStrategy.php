<?php
require_once __DIR__ . '/GradeStrategy.php';
class WeightedAverageStrategy implements GradeStrategy {
    private array $weights;
    public function __construct(array $weights) { $this->weights=$weights; }
    public function calculate(array $grades): float {
        if (!$grades || count($grades)!==count($this->weights)) return 0.0;
        $total=0.0; foreach ($grades as $i=>$grade) $total += $grade*$this->weights[$i];
        return $total;
    }
    public function getName(): string { return 'Weighted Average'; }
}
