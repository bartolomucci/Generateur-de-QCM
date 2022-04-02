<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h2 class="text-info">Réponse(s)</h2>

    <a href="/new-answer.php">Créer une nouvelle réponse</a>
    <table class="table table-dark">
        <thead class="thead thead-light">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($answers as $answer): ?>
            <tr>
                <td><?= $answer->getId() ?></td>
                <td><?= $answer->getText() ?></td>
                <td class="d-flex flex-row justify-content-evenly">
                    <a href="/edit-answer.php?id=<?= $answer->getId() ?>">Modifier</a>
                    <a href="/delete-answer.php?id=<?= $answer->getId() ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>