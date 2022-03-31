<?php

if(isset($_GET['id']))
{

    $message = "";

    // Récupère les données de la question dont l'id est == à $_GET['id']
    require_once '../app/Manager/QuestionManager.php';
    $questionManager = new QuestionManager();
    $question = $questionManager->get($_GET['id']);

    // On recupère tous les qcms depuis la db
    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcms = $qcmManager->getAll();
    

    if(isset($_POST['submit']) && (!empty($_POST['title']) && (!empty($_POST['id_qcm']))))
    {
        $new = $questionManager->update($_POST['title'], intval($_GET['id']), intval($_POST['id_qcm']));
        header('Location: index-question.php');die;
    }

    require '../template/edit-question.tpl.php';


    
}

