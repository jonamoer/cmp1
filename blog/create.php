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
$current = "create.php";
require_once 'nav.php';?>

<div class="container">

  <div class="starter-template">
    <h1>Create</h1>
    <p class="lead">Create Pagina</p>
  </div>

</div><!-- /.container -->



<?php require_once 'footer.php';?>
