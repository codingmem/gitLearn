<html> <head> <title>Functions in PHP</title></head>
<body>
    <center>
        <?php
           function show(& $a,& $b)     //call by reference
{
    $a=$a+10;
    $b=$b+42;
}
function swap(&$a,&$b){
    $c=$a;
    $a=$b;
    $b=$c;
}



$a=52;
$b=54;
show($a,$b);
echo $a." ".$b;
echo "<br> Value before swapping is :".$a." ".$b."<br>";
swap($a,$b);
echo "Value after swapping is:".$a." ".$b."<br>";
        /*function factorial($n){
            $f=1;
            while($n!=0){
                $f=$f*$n;
                $n--;
            }
            return $f; //A function can receive more than 1 value but can't return maore than 1 value.
        }
        /*function display(...$a) // 3 dots before variable name indicates the any number of arguments
        {                      //Definition of function
            echo "This is a function in PHP.<br>";
            $sum=0;
           foreach($a as $m){
            $sum=$sum+$m;
           }
            echo "Sum is :".$sum."<br>";
        }
        //main
             //function call
        display(50,62);
        display(12,35,56);
        display(10,54,78,86);
        echo "End program.";*/
        //factorial(2);
        //echo "Factorial of 5 is :".factorial(5);
        
        ?>
        </center>
 </body>
  </html>
