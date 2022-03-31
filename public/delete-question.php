<?php

if (isset($_GET['id']))
{
    require_once '../app/Manager/QuestionManager.php';
    $questionManager = new QuestionManager();
    $question = $questionManager->delete($_GET['id']);

    require '../template/delete-question.tpl.php';

}

