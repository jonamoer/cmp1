<?php
session_start();

if(isset($_SESSION["username"])){
    //Je Bent ingelogd
}else{
    //Je bent niet ingelogd
    header("Location: login.php");
}

?>

<?php require_once 'header.php';?>


<?
$current = "index.php";
require_once 'nav.php';?>

    <div class="container">

      <div class="starter-template">
        <h1>Home</h1>
        <p class="lead">Homepagina.</p>
      </div>

    </div><!-- /.container -->



  <?php require_once 'footer.php';?>
