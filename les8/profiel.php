<?php
session_start();

if(isset($_SESSION["username"])){
    //Je Bent ingelogd
}else{
    //Je bent niet ingelogd
    header("Location: Login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h1>Profiel Pagina</h1>
    <h3>Welkom <?php echo $_SESSION["username"] ?></h3>
</body>
</html>