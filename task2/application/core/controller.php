<?php

class Controller{
    public $model;
    static $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index(){
        echo 'actoin index pare';
        $this -> view -> generate('myview', 'template.php');
    }
}