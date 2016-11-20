<?php
//Print onderstaande array in een alfabetisch geordende lijst. Gebruik hiervoor de <ol>

//$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 
//'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

//Uitbereiding: Zet de naam in kapitalen via PHP code

$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 
'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
 
sort($cities);
foreach ($cities as $key => $val){
    echo "[" . $key . "] = " . $val . "<br/>";  
    $str = strtoupper($val);
}

?>

