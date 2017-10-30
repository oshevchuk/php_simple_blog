<?php
//require '../core/db.php';

class MainController extends Controller{
    public $model_;
    public $view_;
    private $db;
    
    function __construct()
    {
        parent::__construct();
//        echo '1';
        $this->view_ = new View();
        $this->db = new DB();
    }
    
    public function action_index($data)
    {
//        print_r($data);
//        echo 'actoin index child';
//        parent::$view->generate('myview', 'template.php');
//        $this->view_->generate('myview', 'template.php');
        $this->view_->generate('main', 'template.php');
    }
    public function action_q($data){
//        echo '<hr>';
//        print_r($data);
        $this->view_->generate('main', 'template.php', $data);
//        echo 'rewhguirhewphwerpu*-//*/*';
    }
    public function action_main(){
//        echo 'main';
        $this->view_->generate('main', 'template.php', 'main');
    }
    public function action_current_work(){
        $this->view_->generate('current_work', 'template.php', 'current_work');
    }

    public function action_home_work(){
        $this->view_->generate('home_work', 'template.php', 'home_work');
    }
    public function action_about(){
        $this->view_->generate('about', 'template.php', 'about');
    }
    public function action_auth(){
        if(isset($_POST["login"])){
            $res = $this->db->getUser($_POST["login"]);
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