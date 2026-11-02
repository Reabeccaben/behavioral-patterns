<?php
require_once __DIR__ . '/Handler.php';

class FinanceHandler extends Handler
{
    protected function canHandle(string $request): bool
    {
        return $request === 'Payment Concern';
    }

    protected function process(string $request): void
    {
        echo "Finance: Processing " . htmlspecialchars($request) . "...<br>";
    }

    protected function getName(): string
    {
        return 'Finance';
    }
}
