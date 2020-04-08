<?php

// Creare una funzione che calcola l’area del rettangolo.
// Scrivere un programma in cui la funzione è usata.


// Programma principale

echo 'Inserisci la base del rettangolo:';
$b = intval(fgets(STDIN));

echo 'Inserisci l\'altezza del rettangolo:';
$a = intval(fgets(STDIN));

$area = area_rettangolo($a, $b);
echo "L'area del rettangolo è: $area\n";

// Definizione delle funzioni

function area_rettangolo($base, $altezza)
{
    $area = $base * $altezza;
    return $area;
}