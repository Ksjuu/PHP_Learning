<?php

$myArray = array(
    'Московская область' => array (
        1 => 'Москва',
        2=> 'Зеленоград',
        3=> 'Клин'
    ),
    'Ленинградская область'=> array(
        1 => 'Санкт-Петербург',
        2 => 'Всеволожск',
        3=> 'Павловск',
        4=> 'Кронштадт'
    )
);
// print_r ($myArray);

foreach ($myArray as $key => $array) {
    foreach ($array as $inner_key => $city) {
        if (substr($city, 0, 2) === "К") {

            echo $city . PHP_EOL;


        }
    }
}
