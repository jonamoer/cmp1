<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 14/10/16
 * Time: 15:23
 */

/*
 * Oefening 2: Zoekformulier

Maak een pagina waarop een zoekveld staat
Bij het zoeken (submit) stuur je de gegevens door via GET
Indien er een GET parameter is plaats de titel 'Zoekresultaten voor [ZOEKOPDRACHT]'

 */

?>
<!--<form method="post" action="formulier.php" >-->
    <form method="get" action="<?php $_SERVER['PHP_SELF']?>" >
    zoekresultaat : <input type="text" name="zoekRsl">
    <input type="submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $zoek = $_GET['zoekRsl'];
    if(!empty($_GET['zoekRsl'])){
        echo "{$zoek}<br>";
    }

    else {
        echo "geef uw zoek resultaat in <br>";
    }}





/*
 * Oefening 3: Contactformulier

Maak een contactformulier met 'voornaam, naam, email, wachtwoord, bericht'
Gebruik de correcte input types
Stuur de gegevens door naar een pagina via POST
Toon de doorgestuurde gegevens op deze pagina
 */
?>

<br><form method="post" action="<?php $_SERVER['PHP_SELF']?>" >
naam : <input type="text" name="vnaam">
vnaam


    <input type="submit">
</form>

















