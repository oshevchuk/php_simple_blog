<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$value = '';
$prev = '';
$op = '';
$v1='';
$v2='';

if(isset($_POST['cur'])){
//    $value = $_POST['cur'];
    $v2 = $_POST['cur'];

//    cur - current user input
//    hidden - previous value
//
//    echo $_POST['operator'];
//    echo $_POST['hiden'];
//    get values

    $v1=isset($_POST["cur"])?$_POST["cur"]:'';
    $v2=isset($_POST['hiden'])?$_POST['hiden']:'';
    $op=isset($_POST['operator'])?$_POST['operator']:'';
    
    if($v1 && $v2==''){
        $v2=$v1;
        $v1='';
        $op=isset($_POST['operator'])?$_POST['operator']:'';
        
        echo 'yes'.$v1;
    }
    
    if($v1 && $v2){
        $v2= $v1+$v2;
        switch ($op){
            case '+':
                $v2= $v1+$v2;
                break;
            case '-':
                $v2= $v1-$v2;
                break;
            case 'X':
                $v2= $v1*$v2;
                break;
            case '/':
                $v2= $v1/$v2;
                break;
            default:
                break;
        }
    }


}

require 'layout.php';