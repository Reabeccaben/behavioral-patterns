<?php
interface GradeStrategy { public function calculate(array $grades): float; public function getName(): string; }
