<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> User registration Powered Up</title>
        <link rel='stylesheet' type="text/css" href="login.css" >
    </head>

    <body>
        <div class="header">
            <div> </div>
        </div>
        <form method ="post" action="register.php">
            <?php include('errors.php'); ?>
            <div class="input">
                <label>Username:</label>
                <input type="text" name="username">
            </div>
            <div class="input">
                <label>Email:</label>
                <input type="text" name="email">
            </div>
            <div class="input">
                <label>Password:</label>
                <input type="password" name="password_1">
            </div>
            <div class="input">
                <label>Confirm Password:</label>
                <input type="password" name="password_2">
            </div>
            <div class="input">
                <button type="submit" name="register" class="bttn">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
            <p>
                 <a href="index.html">Go back home</a>
            </p>
        </form>
</body>
</html>
