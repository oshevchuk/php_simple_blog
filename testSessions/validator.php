<?php
class Validator{
    public $userAnswer;
    public $answerMask;
    function __construct($answers, $mask)
    {
        $this->userAnswer=$answers;
        $this->answerMask=$mask;
    }

    public function compare(){

    }

    static function setEncrypt($value){
        return base64_encode($value);
    }
    static function getEncrypt($value){
        return base64_decode($value);
    }
}