<?php

require '../app/Manager/QuestionManager.php';
$QuestionManager = new QuestionManager();
$questions = $QuestionManager->getAll();


require '../template/delete-answer.tpl.php';
if (isset($_POST['submit']) && $_POST['confirm'] == 1)
{
    if (isset($_GET['id'])) {
        require_once '../app/Manager/AnswerManager.php';
        $answerManager = new AnswerManager();
        $answer = $answerManager->delete($_GET['id']);
        header('Location: index-answer.php');die;
    }
}
if(isset($_POST['submit']) && $_POST['confirm'] == 0)
    {
        header('Location: index-answer.php');die;
    }

