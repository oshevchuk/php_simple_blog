<?php

class DB{
    private $dns;
    private $opt;
    private $pdo;
    
    public function __construct()
    {
        $settings=require 'dbConfig.php';
        $dns=$settings['dsn'];
        $opt=array(
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        );
        $pdo=new PDO($dns, $settings['login'], $settings['password']);
        $this->dns=$dns;
        $this->opt=$opt;
        $this->pdo=$pdo;
    }

    public function getUser($login){
        $posts=$this->pdo->prepare('select * from users WHERE login = :login');
        $posts->execute(array(
            ':login' => $login
        ));
        
        return $posts->fetchAll();
    }

    public function registerUser($login, $password){

        if(count($this->getUser($login))!=0)
            return "register error";

        $posts=$this->pdo->prepare('insert into users (login, password) values (:login, :password)');
        $posts->execute(array(
            ':login' => $login,
            ':password' => $password
        ));

        setcookie("user", $login);

        return "ok";
    }
}