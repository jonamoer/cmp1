<?php

session_start();

if(isset($_POST["login"]))
{
    $username = $_POST["user"];
    $password = $_POST["pass"];
    if($username == "jonatan" && $password == "12345"){
        $_SESSION["username"] = $username;
        echo "sessie aangemaakt, welkom {$username}";
    }else{
        echo "error: invalid login";
    }
}else{
    //niet op login geklikt
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--   get = alle info in de url meegegeven( niet veilig voor gevoelige informatie
post= op een andere pagina de gegevens weergeven -->
<form action="login.php" method="POST">
    <p>Username</p>
    <p><input name="user" type="text" ></p>
    <p>password</p>
    <p><input name="pass" type="password"></p>
    <input type="submit" name="login" value="login">
</form>


</body>
</html>