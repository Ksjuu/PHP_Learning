<?php
power (2, 1 );
function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } elseif ($pow == 1) {
        return $val;
    } else {
        return $val * power($val, $pow - 1);
    }
}

echo power (3, 1);

?>