<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<a class="d-flex justify-content-start" href="index-answer.php">Retourner en arrière</a>
    <form action="" method="POST">
        <label>Intitulé de la réponse</label>
        <input type="text" name="text" value="<?= htmlspecialchars($a->getText()) ?>" required/>
        <input type="submit" name="submit" value="Enregistrer" />
        </select>
    </form>

<?php require '../template/partials/_bottom.tpl.php'; ?>
