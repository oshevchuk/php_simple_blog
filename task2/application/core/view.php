<?php

class View{
    function __construct()
    {
    }

    public function ok(){
        echo 'ok';
    }

    public function generate($content, $temlate, $data=null, $message=null){
        include 'application/views/'.$temlate;
    }
}