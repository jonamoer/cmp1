<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 21/11/16
 * Time: 09:46
 */

session_start();

session_unset();
session_destroy();



require_once 'header.php';

$current = "logout.php";
require_once 'nav.php';



require_once 'nav.php';?>

<div class="container">

    <div class="starter-template">
        <h1>Logout</h1>
        <p class="lead">Je bent normaal uitgelogd</p>
    </div>

</div><!-- /.container -->



<?php require_once 'footer.php';?>
