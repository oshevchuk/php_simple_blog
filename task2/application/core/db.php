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

    public function getUserLog($login, $password){
//        die($login.'|'.$password);
        $posts=$this->pdo->prepare('select * from users WHERE login = :login and password = :password');
        $posts->execute(array(
            ':login' => $login,
            ':password' => $password
        ));

        return $posts->fetchAll();
    }

    public function getComments($post){
        $posts=$this->pdo->prepare('select * from comments WHERE post_id = "'.$post.'"');
        $posts->execute(array());
        return $posts->fetchAll();
    }

    public function setComments($post, $text){
        $posts=$this->pdo->prepare('insert into comments (post_id, text, author) values (:post_id, :text, :author)');
        $posts->execute(array(
            ':post_id' => $post,
            ':text' => $text,
            ':author' => $_COOKIE["user"]
        ));

    }

    public function removeComments($id){
        $posts=$this->pdo->prepare('delete from comments where id = :id');
        $posts->execute(array(
            ':id' => $id
        ));

    }

    public function updateComment($id, $text){
        $posts=$this->pdo->prepare('update comments set text= :text, author = :author WHERE id = :id');
        $posts->execute(array(
            ':id' => $id,
            ':text' => $text,
            ':author' => $_COOKIE["user"]
        ));
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

    public function deletePost($id){
        $posts=$this->pdo->prepare('delete from posts where id = :id');
        $posts->execute(array(
            ':id' => $id
        ));
        header('Location: /main');
    }

    public function getPosts(){
        $posts=$this->pdo->prepare('select * from posts');
        $posts->execute(array());
        return $posts->fetchAll();
    }

    public function getPost($id=''){
        $posts=$this->pdo->prepare('select * from posts WHERE id = "'.$id.'"');
        $posts->execute(array());
        return $posts->fetchAll();
    }
    
    public function savePost(){
        $posts=$this->pdo->prepare('insert into posts (title, text) values (:title, :text)');
        $posts->execute(array(
            ':title' => $_POST["title"],
            ':text' => $_POST["post"]
        ));
    }
}