<!DOCTYPE html>
<html>
    <head>
       <title></title>
       <link rel="stylesheet" href="../../dist/css/log.css">
    </head>
    <body>
        <div class="container">
            <h2>Silahkan Login</h2>
            <form name="myform" action="login.php" method="post" id="form">
                <label for="username">Username :</label>
                <input type="text" name="username"><br><br>

                <label for="password">Password :</label>
                <input type="password" name="password">
                
                <br><br>
                <input type="submit" name="submit_log" value="Login">
                <br>
                <a href="signup.php">Belum punya akun?</a>
            </form>
            <div id="menu">
                <a href="../../index.php">Kembali kemenu</a>
            </div>
        </div>
        <br><br><br>
        <div class="footer">
            <p>&copy; 2023 PT.UNKNOWN. All rights reserved.</p>
        </div>
    </body>
</html>