<?php

// Se non avete abilitato globalmante l'output degli errori inserite queste 3 istruzioni:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Esercizio:
// Leggere 2 numeri a e b e stampare a video il valore più grande
// o indicare che i due valori sono uguali

echo 'Inserisci $a:';
$a = intval(fgets(STDIN));

echo 'Inserisci $b:';
$b = intval(fgets(STDIN));

if ($a > $b) {
    echo "Il valore maggiore è: $a\n";
} elseif ($b > $a) {
    echo "Il valore maggiore è: $b\n";
} else {
    echo "I due valori sono uguali\n";
}
