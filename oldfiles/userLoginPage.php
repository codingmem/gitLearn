<html>
    <head>
        <title>login page</title>
</head>
<body>
    <center>
        <h1>Login Page</h1>
        <form method=post action=page1.php>
            <table border=1>
                <tr>
                    <th>Username</th>
                    <td><input type=text name=txtuser></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type=password name=txtpass></td>
</tr>
<tr>
    <td></td>
    <td>
        <input type="submit" value="Submit" name='submitbtn'>
        <input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
<?php
if(Isset($_POST['submitbtn'])){
 $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        /*echo $user;
        echo $pass;*/
        if(strcmp($user,"ayushi")==0 && strcasecmp($pass,"indore"))
            {
            //echo "<font color='violet' size=6> Login Succesfully</font>";
            //header("Location:functions.php");
            }
            else{
                echo "<font color='red' size=6> Login Failed</font>";
            }
}
?>
</center>
</body>
</html>

        