<?php
require 'header.php';
?>

<div >
    <div class="content">
        <?php
            if(isset($_GET["go"])){
                require "pages/".$_GET["go"].".php";
            }else{
                require "pages/main.php";
            }
        ?>
    </div>
</div>

<?php
require 'footer.php';