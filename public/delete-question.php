<?php


require '../template/delete-question.tpl.php';
if (isset($_POST['submit']) && $_POST['confirm'] == 1)
{
    if (isset($_GET['id'])) {
        require_once '../app/Manager/QuestionManager.php';
        $questionManager = new QuestionManager();
        $question = $questionManager->delete($_GET['id']);
        header('Location: index-question.php');die;
    }
}
if(isset($_POST['submit']) && $_POST['confirm'] == 0)
    {
        header('Location: index-question.php');die;
    }

