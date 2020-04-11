<?php

// Creare una funzione che calcola la media dei numeri compresi tra x e y
// Scrivere un programma in cui la funzione è usata

$a = 5;
$b = 10;

$m = media($a, $b);

echo "La media dei numeri tra $a e $b è pari a: $m\n";


function media($x, $y) {
    $numeri = [];

    for ($i = $x; $i <= $y; $i++ ) {
        $numeri[] = $i;
    }

    $sum = array_sum($numeri);
    $average = $sum / count($numeri);

    return $average;
}