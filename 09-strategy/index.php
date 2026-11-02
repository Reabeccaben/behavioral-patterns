<?php
require_once __DIR__ . '/GradeCalculator.php';
require_once __DIR__ . '/SimpleAverageStrategy.php';
require_once __DIR__ . '/WeightedAverageStrategy.php';
$grades=[85,90,88,91]; $calculator=new GradeCalculator(new SimpleAverageStrategy());
echo '<h2>Grade Calculation System</h2><b>Strategy: '.$calculator->getStrategyName().'</b><br>Result: '.number_format($calculator->calculate($grades),2).'<br><br>';
$calculator->setStrategy(new WeightedAverageStrategy([0.20,0.30,0.20,0.30]));
echo '<b>Strategy: '.$calculator->getStrategyName().'</b><br>Result: '.number_format($calculator->calculate($grades),2).'<br>';
?>
