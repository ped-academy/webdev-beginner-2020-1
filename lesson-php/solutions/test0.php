<?php

// Dato un array già inizializzato con una lista di
// interi, stampare a video il valore più grande

// Array di esempio
$numeri = [3, 7, 0, 5, 2];


if (count($numeri) === 0) {
    echo "Questo array è vuoto!\n";
    exit();
}

$max = $numeri[0];

for ($i = 0; $i < count($numeri); $i++) {
    if ($numeri[$i] > $max) {
        $max = $numeri[$i]; 
    }
}

echo "Il massimo valore è: $max\n";