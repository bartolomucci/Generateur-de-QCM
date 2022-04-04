<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<!-- <h2 class="text-info">Récupérer le titre du QCM</h2> -->

<form action="score.php" method="POST">


<!-- peut-être faire un foreach pour chaque question? -->

<!-- <label>Titre de la première question</label> -->
<!-- (foreach $answers as $answer) :  -->
<!-- <input required type="radio" name="confirm" value="id de answer" -->
<!-- <label>Titre de la réponse</label> -->
<!-- endforeach -->


<input type="submit" name="submit" value="Vérifier">

</form>


<?php require '../template/partials/_bottom.tpl.php'; ?>