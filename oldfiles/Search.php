<html><head><title>Search</title></head>
<body>
    <center>
        <?php
        $mycon=mysqli_connect("localhost","root","","mynewdata");
        echo "Connection Success.<br>";
        $sql="select * from emp";
        $record=$mycon->query($sql);
        $n=mysqli_num_rows($record);
        //echo "Total Records:".$n;
        If($n>0){
            echo "<table border=1>";
            echo "<tr><th>Employee ID</th><th>Employee Name</th><th>Salary</th><th>Department</th></tr>";
            while($row=mysqli_fetch_assoc($record)){
                echo "<tr>";
                echo "<td>".$row['empid']."</td>";
                echo "<td>".$row['ename']."</td>";
                echo "<td>".$row['salary']."</td>";
                echo "<td>".$row['dept']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
            echo "<font color='red' size=5> Record not found.</font>";
        $mycon->close();
        ?>
        </center>
</body></html>
