<?php
$a = 0;
do {
    if ($a === 0) {
        echo $a . ' - ноль' . PHP_EOL;
    } elseif ($a % 2 === 0) {
        echo $a . ' - четное число' . PHP_EOL;
    } else echo $a . " - нечетное число" . PHP_EOL;

    $a++;
} while ($a <= 10);
