<?php

namespace Nickfan\MathExpression;

class Number extends TerminalExpression
{
    public function operate(Stack $stack)
    {
        return $this->value;
    }
}