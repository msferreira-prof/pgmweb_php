<?php

$totalGanhos = 0;
$aliquota    = 0;
$desconto    = 0;

/* leia */
$totalGanhos = $_GET['totalGanhos'];
$totalGanhos = floatval($totalGanhos);

if ($totalGanhos <= 500) {
    $aliquota = 0;
} else {
    if ($totalGanhos >= 500.01 && $totalGanhos <= 1500) {
        $aliquota = 0.10;
    } else {
        if ($totalGanhos >= 1500.01 && $totalGanhos <= 2500) {
            $aliquota = 0.15;
        } else {
            $aliquota = 0.20;
        }
    }
}

$desconto = $totalGanhos * $aliquota;

echo $totalGanhos;
echo $aliquota;
echo $desconto;
