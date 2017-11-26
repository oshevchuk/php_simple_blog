<?php
session_start();

require 'question.php';

if(!isset($_SESSION['count'])){
    $_SESSION['count']=0;
}else{
    $_SESSION['count']++;
}

echo $_SESSION['count'];

require 'questions/quest1.php';

//unset($_SESSION['count']);