<?php
    include 'config.php';
?>
<div class="menu">
    <ul>        
    <?php
        $first=true;
        foreach ($menu_items as $key => $value){
            $class="";
            if(isset($_GET["go"]) and $first){
                if($_GET["go"]==$key){

                    $class="active";
                }
                else
                    $class="";
            }else{
                if($key=="main"){
                    $class="active";
                }else
                    $class="";
            }

            ?>
            <li class="<?=$class; ?>">
                <a href="<?=$key?>"><?=$value?></a>
            </li>
        <?php
        }

    if(isset($_COOKIE["user"])){
        echo "<li><i>Hello</i> <b>".$_COOKIE["user"]."</b><a href='logout'>logout</a></li>";
    }else{
        echo "<li><a href='auth'>Авторизація</a></li><li><a href='register'>Реєстрація</a></li>";
    }
    ?>
    </ul>
</div>