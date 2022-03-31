<?php require '../template/partials/_top.tpl.php'; ?>

<a href="index-question.php">Go back</a>


<form action="" method="POST">
    <label for="confirm">Êtes-vous sûr de vouloir supprimer cette question?</label>
    <input required type="radio" name="confirm" value="1">
    <label>Oui</label> 
    <input required type="radio" name="confirm" value="0">
    <label>Non</label> 
    <br>
    <input type="submit" name="submit" value="Je suis sûr">

</form>


<?php require '../template/partials/_bottom.tpl.php'; ?>

