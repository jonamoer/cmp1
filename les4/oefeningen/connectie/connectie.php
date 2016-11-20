<?php

$host = "localhost";
$dbname = "db_cmp";
$username = "root";
$pass = "root";

$dns = "mysql:host={$host};dbname={$dbname};";

//pdo php data opbject

try{
    $db = new PDO($dns, $username, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Goed gedaan";
}catch(PDOException $e){
    echo "Errormessage: " . $e;
}


