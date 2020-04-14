<?php

$name = "Luigi";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Titolo Pagina</title>
</head>
<body>
    <h1>Ciao <?= $name ?></h1>
    <p>
        Sono le ore 
        <b><?= date('H:i') ?></b><br>
        del giorno <?php echo date('d/m/Y') ?>
    </p>
</body>
</html>
