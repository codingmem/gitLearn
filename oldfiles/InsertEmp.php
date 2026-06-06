<html>
    <head><title>Insert Employee</title></head>
    <body>
        <center>
            <form method=post action=InsertEmp.php>
                Id<input type=text name=txtid><br>
                name<input type=text name=txtname><br>
                Salary<input type=text name=txtsal><br>
                Dept<input type=text name=txtdept><br>
                <input type=submit value=Submit name=btnsubmit>
</form>
           <?php
           if(isset($_POST['btnsubmit'])){
                $eid=$_POST['txtid'];
                $ename=$_POST['txtname'];
                $esal=$_POST['txtsal'];
                $edept=$_POST['txtdept'];
           /*$eid=201;
           $ename="Rajesh sharma";
           $esal=56000;
           $edept='IT';*/
           $mycon=mysqli_connect("localhost","root","","mynewdata") ;
           echo "Connection successfullly established.<br>";
           $sql="Insert into emp values(?,?,?,?)";
           $ps=$mycon->prepare($sql);
              $ps->bind_param("isis",$eid,$ename,$esal,$edept);
           $ps->execute();
           echo "Record inserted Successfully.<br>";
           //$ps->close();
           }
           ?>
           </center>
    </body>
</html>