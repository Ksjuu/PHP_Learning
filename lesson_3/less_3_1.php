<?php
$i = 0;
 const END_CYCLE = 100;
while ($i <=  END_CYCLE) {
    if (($i % 3) == 0) {
        echo $i . PHP_EOL;
    }
    $i++;
}