<html>
    <head><tile>page1</title>
    <body>
        <center>
            <?php
            $user=$_POST['txtuser'];
            $pass=$_POST['txtpass'];
            $ckname="username";
            $ckvalue=$user;
            $ckpass="password";
            $ckpassvalue=$pass;
            setcookie($ckname,$ckvalue);
            setcookie($ckpass,$ckpassvalue);
            echo "User Name:".$user."<br>";
            echo "Password:".$pass."<br>";
            ?>
            <form method=post action=page2.php>
                <input type='submit' value='Submit' >
</form>
            </center>
</body>
</html>