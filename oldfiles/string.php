<html><head><title>String in PHP</title></head>
<body>
      <center>
        <?php
        $str1="Hey There I'm practicing php string.<br>";
        $str2="counting the length of the string.<br>";
        if(strcmp($str1,$str2)==0)
        echo "Same string";
        else
        echo "Not same string";
        $str3=ucwords($str2);
       /* $n=substr_count($str1,"php"); //substr-count()
        echo "The number of occurrences of 'php' in string1 is: ".$n."<br>";
        $newstr=chunk_split($str2,2,'_');
        echo "Length of string 1 is :".strlen($str1)."<br>";
        echo "The length of string2 is:".strlen($str2)."<br>";
        echo "Spaces in string is also counted in length.<br>";
        echo "The words in string1 is:".str_word_count($str1)."<br>";
        echo "The words in string2 is:".str_word_count($str2)."<br>";
        echo $newstr;*/
        echo "<br>The string 3 is:".$str3."<br>";
        ?>
        </center>
</body>
</html>