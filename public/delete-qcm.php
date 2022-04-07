<?php


require '../template/delete-qcm.tpl.php';

if (isset($_POST['submit']) && $_POST['confirm'] == 1)
{
    if (isset($_GET['id'])) {
        require_once '../app/Manager/QcmManager.php';
        $qcmManager = new QcmManager();
        $qcm = $qcmManager->delete(intval($_GET['id']));
        header('Location: index.php');die;
    }
}
if(isset($_POST['submit']) && $_POST['confirm'] == 0)
    {
        header('Location: index.php');die;
    }

