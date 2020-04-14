
<?php

$names = [
    "Luigi",
    "Mario",
    "Luca"
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Titolo Pagina</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Index</th>
        <th>Name</th>
    </tr>
    <?php for ($i = 0; $i < count($names); $i++) { ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $names[$i] ?></td>
        </tr>
    <?php } ?>
</table> 
</body>
</html>
