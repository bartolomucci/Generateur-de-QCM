<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<a class="d-flex justify-content-start" href="index-answer.php">Retourner en arrière</a>
    <form action="" method="POST">
        <label for="id_question">A quel question est lié cette réponse?</label>
        <select name="id_question">
            <?php foreach($questions as $question): ?>
                <option value="<?= $question->getId() ?>"><?= $question->getTitle() ?></option required>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Intitulé de la réponse</label>
        <input type="text" name="text" required/>
        <br>
        <label for="is_the_good">Est-ce la bonne réponse?</label>
        <input type="radio" id="yes" name="is_the_good" value=1 required>
        <label for="yes">Oui</label> 
        <input type="radio" is="no" name="is_the_good" value=0 required>
        <label for="no">Non</label> 
        <br>
        <input type="submit" name="submit" value="Enregistrer" />
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
