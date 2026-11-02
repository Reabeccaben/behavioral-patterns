<?php
require_once __DIR__ . '/Expression.php';
class AndExpression implements Expression {
    private Expression $left; private Expression $right;
    public function __construct(Expression $left, Expression $right) { $this->left=$left; $this->right=$right; }
    public function interpret(array $student): bool { return $this->left->interpret($student) && $this->right->interpret($student); }
}
