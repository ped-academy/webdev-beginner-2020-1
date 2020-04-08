<?php

// Esercizio 1
// Memorizzare in un array i primi 10 multipli di 3.
// Stampare a video tutti gli elementi dell’array e la somma totale.

$numeri = [];
$somma = 0;

for ($i = 0; $i < 10; $i++) {
    $numeri[] = ($i + 1) * 3;
}

for ($i = 0; $i < 10; $i++) {
    echo $numeri[$i] . "\n";
}

$somma = array_sum($numeri);

echo "La somma totale è: $somma\n";
