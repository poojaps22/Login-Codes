<html>
    <title>Seller Login</title>
    <body>
        <?php
        $usr = "username";
        $psw = "password";
        $username = '$_POST[username]';
        $password = '$_POST[password]';
        //$usr == $username && $psw == $password
        session_start();
        if ($_SESSION['username']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
            echo "password accepted";
            $_SESSION['username']=true;
        }else {
            echo "incorrect login";
        }
        ?>

        <form name="input" action="adminportal.php" method="get">
            <input type="submit" value="Home">
        </form>
    </body>
</html>