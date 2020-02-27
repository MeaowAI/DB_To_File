
<?php

$db = "localhost";
$user = "root";
$pass = "";
try{
$con = new PDO("mysql:host=$db;dbname=crud",$user,$pass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    
    echo "Connection failed: ". $e->getMessage();
}