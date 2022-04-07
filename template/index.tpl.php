<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<h2 class="text-info">QCM(s)</h2>

    <a href="/new-qcm.php">Créer un nouveau QCM</a>
    <table class="table table-dark">
        <thead class="thead thead-light">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($qcms as $qcm): ?>
            <tr>
                <td><?= $qcm->getId() ?></td>
                <td><?= $qcm->getTitle() ?></td>
                <td class="d-flex flex-row justify-content-evenly">
                    <a href="/edit-qcm.php?id=<?= $qcm->getId(); ?>">Modifier</a>
                    <a href="/delete-qcm.php?id=<?= $qcm->getId(); ?>">Supprimer</a>
                    <!-- <a href="/display-qcm.php?id=<?= $qcm->getId(); ?>">Jouer</a> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>
