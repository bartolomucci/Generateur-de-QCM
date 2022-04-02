<?php

require '../app/Entity/Answer.php';

class AnswerManager
{
    private $pdo;

    public function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=my_qcm_generator','root');
        }
        catch(PDOException $e)
        {
            echo 'Error : ' . $e->getMessage();
            die;
        }
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM answer';
        $req = $this->pdo->prepare($sql);
        $req->execute();
        $answers = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($answers as $answer)
        {
            $obj = new Answer();
            $obj->setId($answer['id']);
            $obj->setText($answer['text']);
            $obj->setis_the_good($answer['is_the_good']);
            $result[] = $obj;
        }

        return $result;
    }


    public function get(int $id) : Answer
    {
        $sql = "SELECT * FROM answer WHERE id = :id";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        $answer = (new Answer())
            ->setId($result['id'])
            ->setText($result['text'])
            ->setId_question($result['id_question']);

        return $answer;
    }

    public function insert(string $text, int $is_the_good, int $id_question)
    {
        $sql = "INSERT INTO answer (text,is_the_good,id_question) VALUES (:text, :is_the_good :id_question)";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'text' => $text,
            'is_the_good' => $is_the_good,
            'id_question' => $id_question
        ]);

        return $this->pdo->lastInsertId();
    }


    public function update(string $text, int $id)
    {
        $sql = "UPDATE answer SET text = :text WHERE answer.id = :id;" ;
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'text' => $text,
            'id' => $id
        ]);
    }

    public function delete(int $id)
    {
        $sql = "DELETE from ANSWER WHERE answer.id = :id";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'id' => $id,
        ]);
    }
}