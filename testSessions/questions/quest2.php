<?php

$q=new Question('what is true?');
$q->addAskS('1 = 2', 0);
$q->addAskS('true != false', 1);
$q->addAskS('4 < 6', 1);
$q->addAskS('-4 < -30', 0);

$q->Show();