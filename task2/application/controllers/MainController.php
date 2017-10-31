<?php

class MainController extends Controller{
    public $model_;
    public $view_;
    private $db;
    
    function __construct()
    {
        parent::__construct();
        $this->view_ = new View();
        $this->db = new DB();
    }
    
    public function action_index($data)
    {
        $this->view_->generate('main', 'template.php');
    }
    public function action_q($data){
        $this->view_->generate('main', 'template.php', $data);
    }
    public function action_main(){
        $this->view_->generate('main', 'template.php', $this->db->getPosts());
    }

    public function action_post($id){
        $this->view_->generate('post', 'template.php', $this->db->getPost($id[2]), $this->db->getComments($id[2]));
    }

    public function action_removeComment($id){
        $this->db->removeComments($_POST["coment"]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function action_editComment(){
        $this->db->updateComment($_POST["id"], $_POST["text"]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function action_current_work(){
        $this->view_->generate('current_work', 'template.php', 'current_work');
    }
    
    public function action_newpost(){
        if(isset($_POST["post"])){
            $this->db->savePost();
            header('Location: main');
        }
        $this->view_->generate('newpost', 'template.php', '');
    }

    public function action_deletepost($id){
        if($_COOKIE["user"]=='admin' && isset($id[2])){

            $this->db->deletePost($id[2]);
        }

    }
    
    public function action_addcoment(){
        if(isset($_POST["user"])){
            $this->db->setComments($_POST["id"], $_POST["comment"]);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function action_home_work(){
        $this->view_->generate('home_work', 'template.php', 'home_work');
    }
    public function action_about(){
        $this->view_->generate('about', 'template.php', 'about');
    }
    public function action_auth(){
        if(isset($_POST["login"])){
            $res = $this->db->getUserLog($_POST["login"], $_POST["password"]);
            if(count($res)>=1){
                setcookie("user", $_POST["login"]);
                header('Location: main');
            }else{
                $this->view_->generate('auth', 'template.php', 'auth', 'Authorization FaIL');
            }
        }else {
            $this->view_->generate('auth', 'template.php', 'auth');
        }
    }
    public function action_register(){
        if(isset($_POST["login"])){
            $this->view_->generate('register', 'template.php', 'register', $this->db->registerUser($_POST["login"], $_POST["password"]));
        }else{
            $this->view_->generate('register', 'template.php', 'register');
        }


    }
    public function action_logout(){
        unset($_COOKIE["user"]);
        setcookie('user', null, -1);
        header('Location: main');
    }
}