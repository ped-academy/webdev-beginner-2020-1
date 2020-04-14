
<?php

$hours = intval(date('H'));

?>
<!DOCTYPE html>
<html>
<head>
    <title>Titolo Pagina</title>
</head>
<body>
    <?php if ($hours > 7 && $hours < 14) { ?>
        <h1>Buongiorno</h1>
    <?php } elseif ($hours >= 14 && $hours < 21) { ?>
        <h1>Buon Pomeriggio</h1>        
    <?php } else { ?>
        <h1>Buonanotte</h1>
    <?php } ?>
</body>
</html>
