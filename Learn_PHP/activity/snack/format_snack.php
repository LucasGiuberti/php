<?php

function getTip(): int|float
{
    $hamburger = 4.95;
    $milk_shake = 1.95;
    $soda = 0.85;
    $TOT = ($hamburger * 2) + $milk_shake + $soda;
    $aliquot = (7.5 / $TOT) * 100;
    $tip = (16.0 / $aliquot) * 100;
    return $tip;
}

$tip = getTip();
$format = number_format($tip);
echo $format;
