<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<a class="d-flex justify-content-start" href="index.php">Retourner en arrière</a>
    <form action="" method="POST">
        <label>Titre du QCM</label>
        <input type="text" name="title" required/>
        <input type="submit" name="submit" value="Enregistrer" />
    </form>
    <?php if(!empty($message)): ?>
    <div classs="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
