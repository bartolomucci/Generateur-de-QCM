<?php

require '../app/Manager/QuestionManager.php';
$questionManager = new QuestionManager();
$questions = $questionManager->getAll();

$message = "";

if(isset($_POST['submit']))
{
        require '../app/Manager/AnswerManager.php';
        $manager = new AnswerManager();
        $answerId = $manager->insert($_POST['text'], $_POST['is_the_good'], $_POST['id_question']);
        header('Location: /index-answer.php');
}


require '../template/new-answer.tpl.php';

