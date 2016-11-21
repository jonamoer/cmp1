<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 21/11/16
 * Time: 09:02
 */

$bar = array("Charlatan", "De Hoeve", "Hot Club", "JOS", "Manteca", "Piraat", "De Aap", );
$drank = array("Bier", "Cocktails", "Cola", "Koffie", "Rode wijn", "Jenever", "Witte wijn", "Water");
$rand_keys = array_rand($bar, 2);
//$rand_bar = $bar[array_rand($bar)];
$rand_keys = array_rand($drank, 2);

echo "We gaan naar " . $bar[$rand_keys[0]] . " en we drinken de hele avond " . $drank[$rand_keys[1]];



?>


