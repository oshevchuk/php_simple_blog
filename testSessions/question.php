<?php
/**
 * Created by PhpStorm.
 * User: Oshevchuk
 * Date: 26.11.2017
 * Time: 11:42
 */

class Question{
    public $title;
    public $questions = array();
    public $correct_answer=array();
    public $type;

    function __construct($title=null, $type=null)
    {
        $this->title=$title;
        $this->type=QuestionType::$text;
    }
    
    public function Show(){
        $res = include 'layout.php';
        return $res;
    }
}

class QuestionType{
    public static $radio='radio';
    public static $check='check';
    public static $text='text';
}