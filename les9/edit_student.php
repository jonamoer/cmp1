<?php 
$current = "studenten.php";
require_once("includes/header.php"); 
require_once("includes/nav.php"); 
?>

<div class="container">
    <div class="row">
		<form role="form" class="col-md-9 go-right">
			<h2>Edit Student</h2>
			<div class="form-group">
			<input id="naam" name="naam" type="text" class="form-control" required>
			<label for="naam">Naam</label>
		</div>
		<div class="form-group">
			<input id="familienaam" name="familienaam" type="text" class="form-control" required>
			<label for="familienaam">Familienaam</label>
		</div>
        <div class="form-group">
			<input id="email" name="email" type="email" class="form-control" required>
			<label for="email">Email</label>
		</div>
		<div class="form-group">
			<input id="userid" name="userid" type="text" class="form-control" required  readonly>
			<label for="userid">Student ID</label>
		</div>
		<div class="form-group">
			<input id="edit" name="edit" type="submit" class="form-control" value="Edit">
			
		</div>
		</form>
        <?php 
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
       
	</div>
</div>
 
<?php require_once("includes/footer.php"); ?>