<h1>Auth</h1>
<form action="auth" class="col-md-4" method="post">

    <?= $message; ?>
    <div>
        <div >Login:</div>
        <input type="text" placeholder="login" class="form-control" name="login">
    </div>

    <div>Password: </div>
    <input type="password" placeholder="password" class="form-control" name="password">

    <input type="submit" value="Login" class="btn btn-default">
</form>