<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h2 class="text-info">Question(s)</h2>

    <a href="/new-question.php">Créer une nouvelle question</a>
    <table class="table table-dark">
        <thead class="thead thead-light">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($questions as $q): ?>
            <tr>
                <td><?= $q->getId() ?></td>
                <td><?= $q->getTitle() ?></td>
                <td class="d-flex flex-row justify-content-evenly">
                    <a href="/edit-question.php?id=<?= $q->getId() ?>">Modifier</a>
                    <a href="/delete-question.php?id=<?= $q->getId() ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>