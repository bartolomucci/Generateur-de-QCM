<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<!-- <h2 class="text-info">Récupérer le titre du QCM</h2> -->

<form action="score.php" method="POST">
<h1><?= $title->getTitle(); ?> (id QCM = <?= $_GET['id'] ?>)</h1>


<!-- <label>Titre de la première question</label> -->
<label><?= $text->getTitle(); ?></label>
<br>
<br>
<!-- (foreach $answers as $answer) :  -->
<!-- <input required type="radio" name="confirm" value="id de answer" -->
<input type="radio" name="confirm" value="" required>
<!-- <label>Titre de la réponse</label> -->
<label><?= $answer->getText(); ?></label>
<!-- endforeach -->

<input type="submit" name="submit" value="Vérifier">

</form>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>