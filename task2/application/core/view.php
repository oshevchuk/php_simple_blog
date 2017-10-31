<?php

class View{
    function __construct()
    {
    }


    public function generate($content, $temlate, $data=null, $message=null){
        include 'application/views/'.$temlate;
    }
}