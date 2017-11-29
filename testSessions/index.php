<?php
session_start();

$maxQuestions = 4;

require 'header.php';
require 'validator.php';
require 'question.php';

if (isset($_POST['reset'])) {
    $_SESSION['score'] = 0;
    $_SESSION['count'] = 0;
}

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if (isset($_POST["answer"])) {
//    print_r($_POST["answer"]);

    switch ($_POST["type"]) {
        case 'radio':
            if (Question::CheckRadio($_POST["answer"], $_POST['hash'])) {
                $_SESSION['score']++;
                break;
            }
            break;
        case 'check':
            if (Question::CheckCheck($_POST["answer"], $_POST['hash'])) {
                $_SESSION['score']++;
                break;
            }
            break;
        case 'text':
            if (Question::CheckText($_POST["answer"], $_POST['hash'])) {
                $_SESSION['score']++;
                break;
            }
            break;
    }
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    if ($maxQuestions > $_SESSION['count']) {
        $_SESSION['count']++;

        require 'askCounter.php';

        if (file_exists('questions/quest' . $_SESSION['count'] . '.php'))
            require 'questions/quest' . $_SESSION['count'] . '.php';

    }else{
//        echo '>>' . $_SESSION['score'];
        require 'results.php';
    }
}

require 'reset.php';
require 'footer.php';