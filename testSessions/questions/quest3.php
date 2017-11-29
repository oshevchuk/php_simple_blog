<?php


$q=new Question('how many apples? iphone x - iphone 4s', QuestionType::$text);
$q->addAskS('enter value', 6);
$q->Show();