<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<a class="d-flex justify-content-start" href="index.php">Retourner en arrière</a>
    <form action="" method="POST">
        <label>Intitulé du QCM</label>
        <input type="text" name="title" value="<?= htmlspecialchars($qcm->getTitle()) ?>" required/>
        <input type="submit" name="submit" value="Enregistrer" />
        </select>
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
