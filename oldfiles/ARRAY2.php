<html><head><title>PHP Arrays</title></head><body>
    <center>
          <?php
          $array1=array("BTECH","MTECH","BCA","MCA","BBA","MBA","BTECH","MCA");
          $array2=array_unique($array1);
          print_r($array2);
          echo "<br>";
          function multi($n){
            return $n*5;
          }
          $array3=array(2,4,5,30,20,12,10);
          $newar=array_map("multi",$array3);
          print_r($newar);
          echo"<br>";
          $NEWarr=range(1,10,2);
          for($i=0;$i<count($NEWarr);$i++){
            echo $NEWarr[$i]."<br>";
          }
          print_r($NEWarr)
          /*$ar1=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
          $ar2=array("Tuesday","Thursday","Saturday");
          $ar3=array("Monday","Wednesday","Friday","dssrtgd");
          $ar4=array_intersect($ar1,$ar3);
          print_r($ar4);
          echo "<br>";
          $ar5=array_diff($ar1,$ar2,$ar3);
          print_r($ar5);*/
          ?>
          </center>
</body>
</html>