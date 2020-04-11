<?php

// Scrivere uno script che riceve in GET la variabile name:
// Se name è definita stampare “Ciao X” dove X è il testo contenuto in name
// Se name non è definita stampare “Ciao Utente Anonimo”
// Esempi:
// Url: http://localhost/academy/test7.php            ---> Ciao Utente Anonimo
// Url: http://localhost/academy/test7.php?name=Luigi ---> Ciao Luigi

if (isset($_GET['name'])) {
    echo "Ciao " . $_GET['name'];
} else {
    echo "Ciao Utente Anonimo";
}


