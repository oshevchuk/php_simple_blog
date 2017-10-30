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
                <a href="index.php?go=<?=$key?>"><?=$value?></a>
            </li>
        <?php
        }
    ?>
    </ul>
</div>