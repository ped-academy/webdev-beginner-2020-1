<?php

// Logica

$students = [
    ['name' => "Fabio", 'grade' => 22],
    ['name' => "Luigi", 'grade' => 30],
    ['name' => "Mario", 'grade' => 27],
];

$sum = array_sum(array_column($students, 'grade'));
$avg = round($sum / count($students), 1);

// Includiamo il template HTML da usare per la visualizzazione
include 'view/lista-studenti.php';