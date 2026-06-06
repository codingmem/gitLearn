<html>
    <head>
        <title>login page</title>
</head>
<body>
    <center>
       <?php
       $user=$_POST['txtuser'];
       $pass=$_POST['txtpass'];
       echo "User Name:".$user."<br>";
       echo "Password :".$pass."<br>";
       session_start();
       $_SESSION['username']=$user;
       $_SEESION['password']=$pass;
       ?>
       <form method=post action=mypage2.php>
        <input type='submit' value='Submit'>
       </form>
</center>
</body></html>