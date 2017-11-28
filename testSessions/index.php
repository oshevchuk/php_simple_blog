<?php
session_start();

require 'validator.php';
require 'question.php';

if(isset($_POST["answer"])){
    print_r($_POST["answer"]);
}

if(!isset($_SESSION['count'])){
    $_SESSION['count']=0;
}else{
    $_SESSION['count']++;
}

echo $_SESSION['count'];


require 'questions/quest1.php';

//unset($_SESSION['count']);