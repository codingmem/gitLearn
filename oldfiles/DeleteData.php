<html><head><title>This is a file PHP program</title></head>
<body><center>
    <?php
    $mycon=mysqli_connect("localhost","root","","mynewdata");
    session_start();
    $eid=$_SESSION['$empid'];
    $sql="delete from emp where empid=?";
    $ps=$mycon->prepare($sql);
    $ps->bind_param("i",$eid);
    $ps->execute();
    echo "Record deleted successfully";
    ?>
    </center>
     </body>
</html>