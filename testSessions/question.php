<?php

class Question
{
    public $title;
    public $questions = array();
    public $correct_answer = array();
    public $type;

    public $hash = '';

    function __construct($title = null, $type = null)
    {
        $this->title = $title;
        $this->type = $type;
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

        $this->hash = "";
        $str = '';
        for ($i = 0; $i < count($this->correct_answer); $i++) {
            $str .= $this->correct_answer[$i];
        }
//        print_r($this->correct_answer);
//        print_r($str);
        $this->hash = $str;
    }

    static function CheckRadio($index, $hash)
    {
        if ($hash[$index])
            return true;
        else
            return false;
    }

    static function CheckCheck($a, $b)
    {
        $res = true;
        $t = [];
        for ($i = 0; $i < strlen($b); $i++) {
            array_push($t, 0);
        }
        for ($i = 0; $i < count($a); $i++) {
            $t[$a[$i]] = 1;
        }
        if (implode('', $t) != $b) {
            $res = false;
        }
        return $res;
    }

    static function CheckText($a, $b)
    {
        if ($a==$b)
            return true;
        else
            return false;
    }

    static function Check($answer, $hash)
    {
        for ($i = 0; $i < count($answer); $i++) {
            if ($hash[$i] != 0 && $hash[$i] == $answer[$i]) {
                return true;
            }
        }
        return false;
    }
}

class QuestionType
{
    public static $radio = 'radio';
    public static $check = 'check';
    public static $text = 'text';
}