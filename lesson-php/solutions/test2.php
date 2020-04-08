<?php

// Esercizio 2
// Dato l'array $studenti, stampare a video il nome dello studente con il voto più alto

$studenti = [
    [
        'nome' => "Luigi",
        'voto' => 24,
    ],
    [
        'nome' => "Mario",
        'voto' => 28,
    ],
    [
        'nome' => "Peppe",
        'voto' => 18,
    ],
];

$studente_migliore = $studenti[0];

for ($i = 0; $i < count($studenti); $i++) {
    if ($studenti[$i]['voto'] > $studente_migliore['voto']) {
        $studente_migliore = $studenti[$i];
    }
}

echo "Lo studente con il voto più alto è: " . $studente_migliore['nome'] . "\n";


