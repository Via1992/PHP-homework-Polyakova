<?php

$string = 'Пример задания с пробелом';

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === ' ') {
        $string[$i] = '_';
    }
}

echo $string . PHP_EOL;
