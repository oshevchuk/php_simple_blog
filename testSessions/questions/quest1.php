<?php
  $question = [

];
?>
<!--<h2>What is number?</h2>-->
<!--<div>-->
<!--    <input type="checkbox" name="ans" value="" id="q1">-->
<!--    <label for="q1">Hello World</label>-->
<!--</div>-->

<?php

$q=new Question('First Ask, how match 2+1= ?');
$q->addAskS('1', 0);
$q->addAskS('2', 0);
$q->addAskS('3', 1);
$q->addAskS('4', 0);

//array_push($q->questions, 'What is one?');
//array_push($q->questions, 'What is 2?');
//array_push($q->questions, 'What is 3?');
//array_push($q->questions, 'What is 4?');
//
//$q->correct_answer=[0,0,0,1];
//
$q->Show();