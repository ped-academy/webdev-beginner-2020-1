<?php

// Esercizio:
// Leggere un numero N positivo, e stampare a video tutti i numeri Pari maggiori di 0 e minori di N.
// Esempio: dato N = 10 l’algoritmo deve dare come output: 0, 2, 4, 6, 8

// Suggerimento:
// Usare l'operatore % (operatore modulo, torna il resto della divisione intera)
// Esempio: 5 % 2 torna 1, 4 % 2 torna 0

echo 'Inserisci N:';
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    if ($i % 2 === 0) {
        echo "$i\n";
    }
}

