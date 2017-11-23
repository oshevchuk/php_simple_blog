<?php

$req1 ="";
$req2 ="";
$op1="";
$op2="";
$ans=0;

if(isset($_POST["operator"])){
    if(isset($_POST['req1'])){
        $req1=$_POST['req1'];
    }
    if(isset($_POST['req2'])){
        $req2=$_POST['req2'];
    }
    if(isset($_POST["operator"])){
        $op1=$_POST["operator"];
    }
    if(isset($_POST['op2'])){
        $op2=$_POST['op2'];
    }


    if($req2){
        if($op1!='=')
            $req1 = $ans = doOperator($op2, $req1, $req2);
        else{
            $req1 = $ans = doOperator($op2, $req1, $req2);
            $op1=$op2;
        }
    }
}


function doOperator($operator, $r1, $r2){
    $r1=floatval($r1);
    $r2=floatval($r2);
    switch ($operator){
        case 'X':
            return $r2 * $r1;
            break;
        case '+':
            return $r2 + $r1;
            break;
        case '-':
            return $r2 - $r1;
            break;
        case '/':
            return $r2 / $r1;
            break;
        case '=':
            return $r1;
            break;
    }
}

//------------------------
require 'layout.php';