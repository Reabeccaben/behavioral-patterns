<?php
require_once __DIR__ . '/Handler.php';

class ICTHandler extends Handler
{
    protected function canHandle(string $request): bool
    {
        return $request === 'Student ID Concern';
    }

    protected function process(string $request): void
    {
        echo "ICT: Processing " . htmlspecialchars($request) . "...<br>";
    }

    protected function getName(): string
    {
        return 'ICT';
    }
}
