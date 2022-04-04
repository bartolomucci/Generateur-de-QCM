<?php

require '../app/Manager/QuestionManager.php';
$questionManager = new QuestionManager();
$questions = $questionManager->getAll();

$message = "";

if(isset($_POST['submit']))
{
        if($_POST['is_the_good'] === "1")
        {
                $_POST['is_the_good'] = 1;
        }
        elseif($_POST['is_the_good'] == "0")
        {
                $_POST['is_the_good'] = 0;    
        }

                if(!empty($_POST['text']))
                {
                require '../app/Manager/AnswerManager.php';
                $manager = new AnswerManager();
                $answerId = $manager->insert(strval($_POST['text']), boolval($_POST['is_the_good']), intval($_POST['id_question']));
                header('Location: /index-answer.php');
                }
}


require '../template/new-answer.tpl.php';

