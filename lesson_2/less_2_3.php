<?php
function summa($a, $b){
    return ($a + $b);
}
$sum = summa(-6, 3);
echo ("сумма двух чисел = $sum ;");

function raznoct($a, $b){
    return ($a - $b);
}
$razn = raznoct(-6, 3);
echo (" разность двух чисел = $razn ;");

function delen($a, $b){
    return ($a / $b);
}
$del = delen(-6, 3);
echo (" деление двух чисел = $del ;");

function ymnozh($a, $b){
    return ($a * $b);
}
$ymn = ymnozh(-6, 3);
echo (" умножение двух чисел = $ymn ;");
?>
