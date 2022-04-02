<?php

if(isset($_GET['id']))
{
    require_once '../app/Manager/AnswerManager.php';
    $answers = new AnswerManager();
    $a = $answers->get($_GET['id']);    

    if(isset($_POST['submit']) && (!empty($_POST['text'])))
    {
        $new = $answers->update($_POST['text'], intval($_GET['id']));
        header('Location: /index-answer.php');die;
    }

    require '../template/edit-answer.tpl.php';

}