<?php

require '../app/Manager/QcmManager.php';
$qcmManager = new QcmManager();
$qcms = $qcmManager->getAll();
$title = $qcmManager->get($_GET['id']);

require '../app/Manager/QuestionManager.php';
$questionManager = new QuestionManager();
$questions = $questionManager->getAll();
$text = $questionManager->get($_GET['id']);

require '../app/Manager/AnswerManager.php';
$answerManager = new AnswerManager();
$answers = $answerManager->getAll();
$answer = $answerManager->get($_GET['id_question']);



require '../template/display-qcm.tpl.php';