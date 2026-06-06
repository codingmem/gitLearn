<?php
$servername="localhost";
$username="root";
$password="password";

try{
    $conn=new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
    //set the PDO ERROR MODE TO EXCEPTION
    $conn->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successfully Established";
} catch(PDOException $e){
    echo "Connection Failed:".$e->getMessage();
}
?>