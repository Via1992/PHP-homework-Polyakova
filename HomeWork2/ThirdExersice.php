<?php

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

print_r(operationSum(4, 5));
print_r(operationDiff(4, 5));
print_r(operationMult(4, 5));
print_r(operationDiv(4, 5));