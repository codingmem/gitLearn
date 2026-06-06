<html>
    <head>
        <title>Logical operators in PHP</title>
</head>
<body>
    <center>
       
        <?php         //Logical operator are testing
        /*$a=20;         //and (&&) is a short circuit operator
        $b=60;
        if (!(++$a>25 || ++$b>10)){    //number other than 0 is true 
            echo "At least one condition is true.<br>";
        }
        else{
            echo "None of the conditions is true.<br>";
        }
        echo $a."<br>";
        echo $b;*/
        /*string operaors . .=
        $a=100;
        $b="Value of a is:";
        $b.=$a;             //$b=$b+$a.
        echo $b;*/
        //conditional assignment operators  ?:
    $a=10;
       $b=50;
    $str=500 ? "First operand is smaller":"first is greater operand:";
       echo $str;
        ?>
        </center>
</body>
</html>