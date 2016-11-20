<?php

require_once'connectie2.php';

$sql ="SELECT * FROM studenten";

try{
    $rows = $db->query($sql);

    foreach($rows as $row){
        echo $row['voornaam']."<br>";
        echo $row['achternaam']."<br>";
    }
}catch(PDOException $e){
    echo "eror: ". $e;
}
