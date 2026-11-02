<?php
require_once __DIR__ . '/Handler.php';

class StudentAffairsHandler extends Handler
{
    protected function canHandle(string $request): bool
    {
        return $request === 'Good Moral Certificate';
    }

    protected function process(string $request): void
    {
        echo "Student Affairs: Processing " . htmlspecialchars($request) . "...<br>";
    }

    protected function getName(): string
    {
        return 'Student Affairs';
    }
}
