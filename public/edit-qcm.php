<?php

if(isset($_GET['id']))
{

    $message = "";

    // Récupère les données le QCM dont l'id est == à $_GET['id']
    require_once '../app/Manager/QcmManager.php';
    $questionManager = new QcmManager();
    $qcm = $questionManager->get($_GET['id']);    

    if(isset($_POST['submit']) && (!empty($_POST['title'])))
    {
        $new = $questionManager->update($_POST['title'], intval($_GET['id']));
        header('Location: index.php');die;
    }

    require '../template/edit-qcm.tpl.php';


    
}

