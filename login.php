<!DOCTYPE html>
<?php include('server.php') ?>
<html>
    <head>
        <title>Login Powered Up</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="header">
        </div>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input">
                <label>Username:</label>
                <input type="text" name="username" >
            </div>
            <div class="input">
                <label>Password:</label>
                <input type="password" name="password">
            </div>
            <div class="input">
                <button type="submit" class="bttn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
            <p>
                <a href="index.html">Go back home</a>
            </p>
        </form>
    </body>
</html>
