<?php

class Answer
{

    private int $id;

    private string $text;

    private int $is_the_good;
    
    private int $id_question;

        /**
     * Get the value of id_question
     */ 
    public function getId_question()
    {
        return $this->id_question;
    }

    /**
     * Set the value of id_question
     *
     * @return  self
     */ 
    public function setId_question($id_question)
    {
        $this->id_question = $id_question;

        return $this;
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of is_the_good
     */ 
    public function getis_the_good()
    {
        return $this->is_the_good;
    }

    /**
     * Set the value of is_the_good
     *
     * @return  self
     */ 
    public function setis_the_good($is_the_good)
    {
        $this->is_the_good = $is_the_good;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}