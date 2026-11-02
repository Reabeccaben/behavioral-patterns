<?php
require_once __DIR__ . '/Subject.php'; require_once __DIR__ . '/Observer.php';
class GradeSystem implements Subject {
    private array $observers=[]; private float $grade=0.0;
    public function attach(Observer $observer): void { $this->observers[]=$observer; }
    public function detach(Observer $observer): void {
        foreach ($this->observers as $key=>$item) if ($item===$observer) unset($this->observers[$key]);
        $this->observers=array_values($this->observers);
    }
    public function setGrade(float $grade): void { $this->grade=$grade; echo 'Grade updated: '.number_format($grade,2).'<br><br>'; $this->notify(); }
    public function notify(): void { foreach ($this->observers as $observer) $observer->update($this->grade); }
}
