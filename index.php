<?php
session_start();
 include 'head.php'; 
 ?>

   <div class="row">
   	<div class="col-lg-8 offset-2">
   		<h2>SignUp</h2>
   		<form method="post" action="form_action/signup_action.php">
   		  <div class="form-group">
   		    <label for="first_name">First Name</label>
   		    <input type="text" name="first_name" class="form-control" placeholder="Enter first name" required>
   		  </div>
   		  
   		  <div class="form-group">
   		    <label for="last_name">Last Name</label>
   		    <input type="text" name="last_name" class="form-control" placeholder="Enter last name"  required>
   		  </div>
   		  
   		  <div class="form-group">
   		    <label for="email">Email</label>
   		    <input type="email" name="email" class="form-control" placeholder="Enter email"  required>
   		  </div>

          <div class="form-group">
   		    <label for="password">Password</label>
   		    <input type="password" name="password" class="form-control" placeholder="Enter Password"  required>
   		  </div>
   		  
   		  <div class="form-group">
   		    <label for="confirm_password"> Confirm Password</label>
   		    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password"  required>
   		  </div>
   		  
   		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
   		</form>
   		<a href="/blogoop/signIn.php">Already have an account?</a>
         <?php
         if (isset($_SESSION["messageErr"])) {
            // var_dump($_SESSION);
            $msg = $_SESSION["messageErr"];
            ?>
            <div class="alert alert-danger mt-3" role="alert">
              <?php echo $msg; ?>
            </div>
            <?php
            unset($_SESSION['messageErr']);
         }
         if (isset($_SESSION['messageSuccess'])) {
            $msg = $_SESSION['messageSuccess'];
            ?>
            <div class="alert alert-success mt-3" role="alert">
              <?php echo $msg; ?>
            </div>
            <?php
            unset($_SESSION['messageSuccess']);
         }
         ?>
   	</div>
   </div>

<?php 

include "footer.php"; 
?>