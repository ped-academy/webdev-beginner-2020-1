<?php include 'modules/header.php' ?>

<h3>Lista Studenti:</h3>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Voto</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($students); $i++) { ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $students[$i]['name'] ?></td>
                <td><?= $students[$i]['grade'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<h4>Media voto: <?= $avg ?></h4>

<?php include 'modules/footer.php' ?>