
<h1>Register</h1>
<form action="register" class="col-md-4" method="post">

    <?php
    if($message){
        echo $message;
    }
    ?>

    <?php if($message!="ok" && !$_COOKIE["user"]){ ?>
    <div>
        <div >Login:</div>
        <input type="text" placeholder="login" class="form-control" name="login">
    </div>

    <div>Password: </div>    
    <input type="password" placeholder="password" class="form-control" name="password">

    <input type="submit" value="Register" class="btn btn-default">

    <?php } ?>

</form>