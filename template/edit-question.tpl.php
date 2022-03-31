<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<a href="index-question.php">Go back</a>
    <form action="" method="POST">
        <label>Intitulé de la question</label>
        <input type="text" name="title" value="<?= htmlspecialchars($question->getTitle()) ?>" required/>
        <input type="submit" name="submit" value="Enregistrer" />

        <select name="id_qcm">
            <?php foreach($qcms as $qcm): ?>
                <option value="<?= htmlspecialchars($qcm->getId()) ?>" <?php if($question->getIdQcm() == $qcm->getId()): ?>selected<?php endif; ?> >
                    <?= htmlspecialchars($qcm->getTitle()) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
