<html>
    <head><title>PHP Operator</title></head>
    <body><center>
        <?php
       /* echo (10+10)."<br>"; //Arithmatic operator
        echo (10-5)."<br>";
        echo (10*5)."<br>";
        echo (10/5)."<br>";
        echo (10%3)."<br>";
        echo (10**3)."<br>";*/
        /*$a=50;               //relational operator
        $b='10';
        $c=50;
        echo($a<=>$b)."<br>"; //true +1 0 -1         logical operator
        echo ($a===$b)."<br>"; //not equal to(<>)
        if(($a===$b)==$c){
        echo "hey its done";
        }
        else{
            echo "DO it again";
        }*/
           /* $a=52;             //pre and post increment and decrement
            $b=50;
            echo "value of a before pre-increment".$a."<br>";
            ++$a;    //pre-increment
            echo"Value of a after pre-increment:".$a."<br>";
            echo "Value of b before post-increment:".$b."<br>";
            $b++;    //post increment
            echo "Value of b after post-increment:".$b."<br>";
             if($a++>60){
                echo "HEY! Are u there?";
             }
             else{
                echo "Search from 0";
             }
             $c=10;
             $d=++$c+$c++ + ++$c;  //pre-increment and post-increment addition
             echo "<br>Value of c:".$c."<br>";
             echo "Value of c again:".$d."<br>";*/
             $a=10;
             $b=20;
             $c=++$a;
             $d=$b--;
             $e=$a + ++$a + $a++;
             echo $a;
             echo $b;
             echo $c;
             echo $d;
             echo $e;
            
       ?>
        </center>
</body>
</html>