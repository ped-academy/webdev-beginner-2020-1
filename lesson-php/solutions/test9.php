<?php

// Visualizzare l'array $students con una tabella HTML
// Dopo la tabella mostrare il numero totale degli studenti
$students = ["Luigi", "Mario", "Luca"];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Test5</title>
</head>
<body>
    <h3>Lista Studenti:</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php for ($i = 0; $i < count($students); $i++) { ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $students[$i] ?></td>
            </tr>
        <?php } ?>
    </table>
    <h4>Totale studenti: <?= count($students) ?></h4>
    <p>Ultimo aggiornamento:<br><?= date('H:m d/m/Y') ?></p>
</body>
</html>
