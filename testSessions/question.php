<?php

/**
 * Created by PhpStorm.
 * User: Oshevchuk
 * Date: 26.11.2017
 * Time: 11:42
 */
class Question
{
    public $title;
    public $questions = array();
    public $correct_answer = array();
    public $type;

    public $hash='';

    function __construct($title = null, $type = null)
    {
        $this->title = $title;
        $this->type = QuestionType::$text;
    }

    public function Show()
    {
        $res = include 'layout.php';
        return $res;
    }

    public function addAskS($ask, $is_correct)
    {
        array_push($this->questions, $ask);
        array_push($this->correct_answer, $is_correct);

        $this->hash="";
        $str='';
        for($i=0; $i<count($this->correct_answer); $i++){
            $str+=$this->correct_answer[$i];
        }
        print_r($this->correct_answer);
        print_r($str);
        $this->hash=$str;
    }
}

class QuestionType
{
    public static $radio = 'radio';
    public static $check = 'check';
    public static $text = 'text';
}