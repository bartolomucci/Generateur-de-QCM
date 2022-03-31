<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
<a class="d-flex justify-content-start" href="index-question.php">Retourner en arrière</a>

<form action="" method="POST">
    <label for="confirm">Êtes-vous sûr de vouloir supprimer cette question?</label>
    <input required type="radio" name="confirm" value="1">
    <label>Oui</label> 
    <input required type="radio" name="confirm" value="0">
    <label>Non</label> 
    <br>
    <input type="submit" name="submit" value="Je suis sûr">

</form>


</div>
<?php require '../template/partials/_bottom.tpl.php'; ?>

