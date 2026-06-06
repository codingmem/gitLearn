<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        /*echo $user;
        echo $pass;*/
        if(strcmp($user,"ayushi")==0 && strcasecmp($pass,"indore"))
            {
            echo "<font color='violet' size=6> Login Succesfully</font>";
            }
            else{
                echo "<font color='red' size=6> Login Failed</font>";
            }
        
        ?>
        </center>
</body>