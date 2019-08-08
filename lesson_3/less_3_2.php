<?php

$i = 0;

do {
    if ($i == 0) {
        echo "$i -  ноль".PHP_EOL;
    } elseif (($i % 2) == 0) {
        echo "$i - Четное число".PHP_EOL;
    } else {
        echo "$i - Нечетное число ".PHP_EOL;
    }
    ++$i;
} while ($i <= 9);


