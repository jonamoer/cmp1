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

require_once 'header.php';




$current = "login.php";
require_once 'nav.php';?>


<!--   get = alle info in de url meegegeven( niet veilig voor gevoelige informatie
post= op een andere pagina de gegevens weergeven -->

<div class="container">

    <div class="starter-template">

        <h1>Login</h1>

<form action="login.php" method="POST">
    <p>Username</p>
    <p><input name="user" type="text" ></p>
    <p>password</p>
    <p><input name="pass" type="password"></p>
    <input type="submit" name="login" value="login">
    <a href="logout.php"><input type="submit" name="logout" value="logout"></a>
    
</form>

        </div>
    </div>

<?php require_once 'footer.php';?>
