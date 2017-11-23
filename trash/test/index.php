<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$value = '';
$prev = '';
$op = 0;

if (isset($_POST["op"]))
    $op = $_POST["op"];

if (isset($_POST["value"])) {
    if ($op == 0) {
        $tmp = $_POST["hiden"] . $_POST["value"];
        if (strlen($tmp) < 10) {
            $value = $tmp;
        } else {
            $value = $_POST["hiden"];
            $prev = $_POST["prev"];
        }
        $prev = $_POST["prev"];
    } else {
        $prev = $_POST["hiden"];
        $value=$_POST["value"];
        $tmp = $_POST["value"];
    }


    $op = 0;
}

if (isset($_POST["operator"])) {
    switch ($_POST["operator"]) {
        case '+':
            if ($_POST["prev"] != '') {
                $value = $_POST["prev"] + $_POST["hiden"];
            }else{
                $value=$_POST["hiden"];
            }
            $prev = $_POST["hiden"];
            
            $op = '1';
            break;

        case '-':
            if ($_POST["prev"] != '') {
                $value = $_POST["prev"] - $_POST["hiden"];
            }else{
                $value=$_POST["hiden"];
            }
            $prev = $_POST["hiden"];

            $op = "1";
            break;

        case '=':
            if ($_POST["prev"] != '' && $_POST["hiden"]!='') {
//                $value=
            }
//            $op='=';
            break;
    }

}

require 'layout.php';