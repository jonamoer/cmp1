
<?php
//Maak een formulier waarin gevraagd wordt naar Naam, E-mail en Bericht. Die verstuurd dient te worden via POST. Naam en E-mail adres //zijn verplichte velden. Controlleer hier dus op in PHP.

//Als extra uitbereiding dient er gecontroleerd te worden (in php) op de vorm van het email adres (bevat een @ en een .)

//Indien dit lukt zoek uit hoe je in PHP kan controleren op de echtheid van een email adres.
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php



// naar lege waarden brengen
$nameErr = $emailErr = $commentErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Naam is verplicht";
  } else {
    $name = test_input($_POST["name"]);
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is verplicht";
  } else {
    $email = test_input($_POST["email"]);
    
  }
    
  if (empty($_POST["comment"])) {
    $commentErr = "Bericht is verplicht";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<p><span class="error">* verplicht</span></p>
<form method="post">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <span class="error">* <?php echo $commentErr;?></span>
  <br><br>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<br><br>";
echo "<h2>Gegevens</h2>";

echo "<p>Uw Naam</p>";
echo $name;
echo "<br><br>";

echo "<p>Uw Email</p>";
echo $email;
echo "<br><br>";

echo "<p>Uw Bericht</p>";
echo $comment;
echo "<br><br>";

?>

</body>
</html>