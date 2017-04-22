<!DOCTYPE html><?php session_start();?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./CSS/login.css">
    </head>
    <body>
    <center>
        <div id="loginDiv">
            <form action="loginAction.php" method="post">
                <br>
                <label for="uname">Username: </label><input type="text" name="email"/>
                <br>
                <label for="uname">Password: </label><input type="password" name="pass"/>
                <br>
                <input type="submit" name="login" value="Login"/>
                <input type="reset" value="Cancel"/>
            </form>
        </div>
    </center>
</body>
</html>

