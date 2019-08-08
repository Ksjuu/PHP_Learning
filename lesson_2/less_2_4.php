<?php
function summa($a, $b)
{
    return ($a + $b);
}

function raznoct($a, $b)
{
    return ($a - $b);
}

function delen($a, $b)
{
    return ($a / $b);
}

function ymnozh($a, $b)
{
    return ($a * $b);
}

function newtest($a, $b, $action)
{
    switch ($action)
    {
        case "sum":
            return summa($a, $b);

        case "minus":
            return raznoct($a,$b);

        case "delim":
            return delen($a,$b);
        case "ymnozhaem":
            return ymnozh($a,$b);
    }


}
$newfun= newtest(6,7, "sum");
echo(" новая функция = $newfun ;");
?>