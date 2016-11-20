<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 14/11/2016
 * Time: 12:51
 */

session_start();

?>

<!doctype html>

<html lang="en">
<head>
    <title>Sessie_get.php</title>
</head>

<body>

<?php

//Specifieke sessievariabelen uitlezen
echo 'De kleur is ' . $_SESSION['kleur'] . '<br>';
echo 'Het getal is ' . $_SESSION['getal'] . '<br>';
//Afdrukken van alle sessie variabelen (global)
echo 'Alle Sessievariabelen... <br>';
var_dump($_SESSION);
?>

</body>
</html>
