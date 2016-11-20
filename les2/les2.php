<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 14/10/16
 * Time: 12:55
 */
//leeftijd vragen

$leeftijd = 4;

if ($leeftijd < 16){
    echo $leeftijd . 'jaar is te jong voor deze film';
}
elseif ($leeftijd < 18){
    echo $leeftijd .'jaar, maar je hebt toestemming nodig';
}

else {
    echo 'je bent' . ' ' . $leeftijd . ' ' . 'geniet van de film';
}

echo '</br>';
echo '</br>';


//maand
$month = date('n');

if($month = 10){
    echo'De herfst is reeds bezig in oktober';
}

else {
    echo'het is niet oktober';
}


echo '</br>';
echo '</br>';

//fibonnaci regel

$x=0;
$y=1;
$z=0;

for($i=0; $i < 20; $i++){

    $z = $x + $y;
    $x = $y;
    $y = $z;
    echo "{$z}<br>";
}

echo '</br>';
echo '</br>';

//50 shades of grey
$kleur = 0;

for($i=0; $i < 50; $i++){
    echo "<div style='width: 2%; height: 50px; background-color:rgb({$kleur},{$kleur},{$kleur}); display: inline-block'></div>";
    $kleur +=5;
};
?>
