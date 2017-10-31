<?php

class Routing{
    static function execute(){
        $controllerName = 'Main';
        $actionName='index';
        $piecesOfUrl=explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($piecesOfUrl[1])){
//            $controllerName=$piecesOfUrl[1];
        }
        if(!empty($piecesOfUrl[1])){
            $actionName=$piecesOfUrl[1];
        }
//        die(print_r($piecesOfUrl));
        $modelName='Model_'.$controllerName;

        $controllerName=$controllerName.'Controller';

        $actionName='action_'. $actionName;
        $fileWhithModel= strtolower($modelName).'php';
        $fileWhithModelPath="application/models/".$fileWhithModel;

        if(file_exists($fileWhithModelPath))
        {
            include $fileWhithModelPath;
        }

        $fileWhithContoller = strtolower($controllerName). '.php';
        $fileWhithContollerPath="application/controllers/".$fileWhithContoller;

        if(file_exists($fileWhithContollerPath)){
            include $fileWhithContollerPath;
        }else{
//            error 404
        }

//        include 'application/controllers/'.$controllerName.'.php';
        $controller = new $controllerName;
        $action=$actionName;
//        die('*'.$action.'*');
        if(method_exists($controller, $action)){
            call_user_func(array($controller, $actionName), $piecesOfUrl);
        }else{
//            error
        }
    }
}