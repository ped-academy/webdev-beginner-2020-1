<?php

// Esercizio:
// Leggere un numero N positivo, e sommare tutti i numeri nell’intervallo [0, N].
// Esempio: dato N = 4 l’algoritmo deve dare come output  il numero 10 (overo 1 + 2 + 3 + 4)

echo 'Inserisci N:';
$n = intval(fgets(STDIN));

$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $sum = $sum + ($i + 1);
}

echo "La somma é: $sum\n";


