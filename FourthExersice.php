<?php

function mathOperation($arg1, $arg2, $operation)
{

    switch ($operation) {
        case 'sum':
            return operationSum($arg1, $arg2);

        case 'diff':
            return operationDiff($arg1, $arg2);

        case 'mult':
            return operationMult($arg1, $arg2);

        case 'div':
            return operationDiv($arg1, $arg2);
    }
}

function operationSum($a, $b)
{
    return $a + $b . PHP_EOL;
}

function operationDiff($a, $b)
{
    return $a - $b . PHP_EOL;
}

function operationMult($a, $b)
{
    return $a * $b . PHP_EOL;
}

function operationDiv($a, $b)
{
    return $a / $b . PHP_EOL;
}

print_r(mathOperation(3, 5, 'diff'));
