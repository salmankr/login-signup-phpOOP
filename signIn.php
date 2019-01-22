<?php
session_start();
 include 'head.php'; 
 ?>
<div class="row">
	<div class="col-sm-8 offset-2">
		<h2>Sign In</h2>
		<form method="post" action="form_action/signin_action.php">
			<div class="form-group">
			  <label for="email">Email</label>
			  <input type="email" name="email" class="form-control" placeholder="Enter email"  required>
			</div>
			<div class="form-group">
   		      <label for="password">Password</label>
   		      <input type="password" name="password" class="form-control" placeholder="Enter Password"  required>
   		    </div>
   		    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php
		if (isset($_SESSION["messageErr"])) {
		   $msg = $_SESSION["messageErr"];
		   ?>
		   <div class="alert alert-danger mt-3" role="alert">
		     <?php echo $msg; ?>
		   </div>
		   <?php
		   unset($_SESSION['messageErr']);
		}
		?>
	</div>
</div>
<?php include "footer.php" ?> 