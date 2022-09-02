<?php

class quiz
{
    private $question;
    private $opt1;
    private $opt2;
    private $opt3;
    private $opt4;
    private $answer;
    private $course;


    public function getid()
    {
        return $this->id;
    }

    public function getQuestion()
    {
        return $this->question;
    }
    public function getOpt1()
    {
        return $this->opt1;
    }
    public function getOpt2()
    {
        return $this->opt2;
    }
    public function getOpt3()
    {
        return $this->opt3;
    }
    public function getOpt4()
    {
        return $this->opt4;
    }
    public function getAnswer()
    {
        return $this->answer;
    }
    public function getCourse()
    {
        return $this->course;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }
    public function setOpt1($opt1)
    {
        $this->opt1 = $opt1;
    }
    public function setOpt2($opt2)
    {
        $this->opt2 = $opt2;
    }
    public function setOpt3($opt3)
    {
        $this->opt3 = $opt3;
    }
    public function setOpt4($opt4)
    {
        $this->opt4 = $opt4;
    }
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }
    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function __construct( $question, $opt1, $opt2, $opt3, $opt4, $answer, $course)
    {
        $this->question = $question;
        $this->opt1 = $opt1;
        $this->opt2 = $opt2;
        $this->opt3 = $opt3;
        $this->opt4 = $opt4;
        $this->answer = $answer;
        $this->course = $course;
    }
}
