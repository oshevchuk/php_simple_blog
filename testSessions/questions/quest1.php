<?php

$q=new Question('how match 2+1= ?', QuestionType::$radio);
$q->addAskS('1', 0);
$q->addAskS('2', 0);
$q->addAskS('3', 1);
$q->addAskS('4', 0);

$q->Show();