<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 14/10/16
 * Time: 14:40
 */

$x = 7;
$y = 10;

function telOp(){
    /* global $x
    global $y*/
    $x = $GLOBALS['x'];
    $y = $GLOBALS['y'];
    $som = $x + $y;
    return $som;
}

echo telOp();

echo '<br>';

echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['HTTP_HOST']. '<br>';
echo $_SERVER['SERVER_NAME']. '<br>';
?>

<a href="globals.php?campus=mariakerke&school=Artevelde"> TEST GET</a>
<?php //echo $_GET['campus'];

if(isset($_GET['campus'])){
    echo "mijn campus is {$_GET['campus']} op school {$_GET['school']}";
}
?>


<!--<form method="post" action="formulier.php" >-->
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>" >
    naam : <input type="text" name="vnaam">
    <input type="submit">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $naam = $_POST['vnaam'];
    if(!empty($_POST['vnaam'])){
    echo "<br>hallo {$naam}";
    }

    else {
        echo "<br> VUL UW NAAM IN!!!";
    }}

?>