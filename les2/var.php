<?php

//Variabel
echo "Dit is een echo <br>";

$naamStudent = "Ken";

echo "Dag {$naamStudent} <br>";

$naamStudent = "Bart";

echo "Dag " . $naamStudent. "<br>";

/* Datatypes
 - String = tekst
 - Boolean (True / False)
 - Integer = getal
 - Float = kommagetal
 */

 //String
 $str = "Dit is een string";

 //integer
 $int = 8;

 //float 
 $float = 5.4;

 //Boolean
 $bool = true;
 $boolTwee = false;

 //Operators

$x = 5;
$y = 4;
$som = $x + $y;
$som = $x - $y;
$som = $x / $y;
$som = $x * $y;

// Error log bestand > applicatiemap > MAMP > Log > error_log 
// /Applications/bitnami-map/apache2/logs

//ARRAY
//Enumeratieve Array
$reeksKleuren = array("Groen", "Geel", "Rood");
echo "<h1>Kleuren</h1>";
echo $reeksKleuren[0] . "<br>";
echo $reeksKleuren[1] . "<br>";
echo $reeksKleuren[2] . "<br>";

//Associatieve Array
$kleurenReeksTwee = [
    "kleur1" => "Rood",
    "kleur2" => "Paars",
    "kleur3" => "Zwart",
];

echo $kleurenReeksTwee["kleur1"] . "<br>";

/* Maak een array over jezelf met je eigen keys
Geef de volgende informatie mee: 
Woonplaats, leeftijd, Voornaam, naam, Hobbies
Echo de values van u array elk om beurt.
*/
 

