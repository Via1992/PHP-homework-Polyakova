<?php

$cities = [

    'Московская область' => [
        'Москва', 'Люберцы', 'Одинцово',
    ],

    'Ленинградская область' => [
        'Питер', 'Петергоф', 'Павловск',
    ],

    'Краснодарский край' => [
        'Краснодар', 'Кореновск', 'Сочи',
    ],
];

foreach ($cities as $area => $city) {
    echo "$area:" . PHP_EOL;
    foreach ($city as $town) {
        if (mb_substr($town, 0, 1) === 'К') {
            $resultCities[] = $town;
        }
    }
    echo implode(', ', $resultCities) . PHP_EOL;
}