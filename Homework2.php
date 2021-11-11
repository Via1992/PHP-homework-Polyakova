<?php

$a = -3;
$b = 0;

if ($a >= 0 && $b >= 0) {
    echo abs($a - $b) . PHP_EOL;
}

if ($a < 0 && $b < 0) {
    echo $a * $b . PHP_EOL;
}

if ($a * $b < 0 || ($a * $b == 0 && ($a < 0 || $b < 0))) {
    echo $a + $b . PHP_EOL;
}

