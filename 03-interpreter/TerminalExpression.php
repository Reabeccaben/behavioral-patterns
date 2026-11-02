<?php
require_once __DIR__ . '/Expression.php';
class TerminalExpression implements Expression {
    private string $field; private $value;
    public function __construct(string $field, $value) { $this->field = $field; $this->value = $value; }
    public function interpret(array $student): bool {
        return isset($student[$this->field]) && (string)$student[$this->field] === (string)$this->value;
    }
}
