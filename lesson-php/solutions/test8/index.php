<?php

// Riprendere l’esercizio N. 4 che calcola l’area del Rettangolo e dividerlo su due file:
// Un file functions.php conterrà solamente la definizione della funzione
// Un file index.php includerà functions.php e ne userà la funzione per calcolare l’area del rettangolo

require_once 'functions.php';

// Programma principale

echo 'Inserisci la base del rettangolo:';
$b = intval(fgets(STDIN));

echo 'Inserisci l\'altezza del rettangolo:';
$a = intval(fgets(STDIN));

$area = area_rettangolo($a, $b);
echo "L'area del rettangolo è: $area\n";
