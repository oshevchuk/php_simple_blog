<?php

$q=new Question('How many beer you can drink?', QuestionType::$radio);
$q->addAskS('0.5 Liters', 0);
$q->addAskS('1 Liters', 1);
$q->addAskS('5 Liters', 0);
$q->addAskS('unlimited', 0);

$q->Show();