<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <center>
            <?php
            session_start();
            $uname=$_SESSION['username'];
            $upass=$_SESSION['password'];
            echo "User Name in next page:".$uname."<br>";

            echo "User's Password in next page: " . $upass . "<br>";
            session_unset();
            session_destroy();
            ?>
        </center>
    </body>
</html>