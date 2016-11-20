
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title> form </title>
</head>
<body>
<h3> Contact US</h3>
<form action="insertform.php" method="post">
    voornaam:<br>
    <input type="text" name="voornaam" required><br><br>

    achternaam:<br>
    <input type="text" name="achternaam" required><br><br><br>

    Email:
    <input type="email" name="email" required><br><br><br>

    Bericht
    <textarea rows="4" cols="5" name="bericht"></textarea><br><br>

    <input type="submit">

</form>
</body>
</html>

<?php

    require 'connectie.php';


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $bericht = $_POST['bericht'];

        try{
            $sql = "INSERT INTO gegevens (voornaam, famillienaam, email, bericht)
                    VALUES ('$voornaam', '$achternaam', '$email', '$bericht')";
            $db->query($sql);
            echo "Laatst toegevoegde ID: " . $db->LastInsertId();

        }catch(PDOException $e){
            echo "ERROR: " . $e->getMessage();
        }
    }




?>


