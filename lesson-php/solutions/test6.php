<?php

// Creare una funzione che ritorna l’ultimo elemento di un array.
// Se l’array è vuoto torna 0
// Scrivere un programma in cui la funzione è usata


$lista = ["Pippo", "Pluto", "Paperino"];

$ultimo_elemento = get_last_item($lista);

echo "L'ultimo elemento dell'array è: $ultimo_elemento\n";


function get_last_item($lista) {
    if (count($lista) === 0) {
        return 0;
    } else {
        $last_index = count($lista) - 1;
        return $lista[$last_index];
    }
}