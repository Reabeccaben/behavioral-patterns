<?php
require_once __DIR__ . '/Handler.php';

class RegistrarHandler extends Handler
{
    protected function canHandle(string $request): bool
    {
        return in_array($request, ['Certificate of Enrollment', 'Transcript of Records'], true);
    }

    protected function process(string $request): void
    {
        echo "Registrar: Processing " . htmlspecialchars($request) . "...<br>";
    }

    protected function getName(): string
    {
        return 'Registrar';
    }
}
