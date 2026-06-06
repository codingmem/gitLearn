<!DOCTYPE html>
<html>
<head>
    <title>PHP Arrays</title>
</head>
<body>
    <center>
        <?php
        $ar=array("indore","Pune","Bhopal","Mumbai",14,52,TRUE,456);
        //$ar1=["a"=>"indore","b"=>"Pune","c"=>"Bhopal","d"=>"Mumbai"]; //Associative array
        //print_r($ar1);
        $AR1=array_slice($ar,-7,2,2);
        echo "<br>";
       //print_r($ar);
       echo"<br>";
       print_r($AR1);
        $i=0;
        /*while($i<count($ar)){
            echo $ar[$i]."<br>";
            $i++;
        }
       /* for($i=0;$i<count($ar);$i++){
            echo $ar[$i]."<br>";
            echo "<br>";
        }
        */
        ?>
        </center>
        </body>
        </html>