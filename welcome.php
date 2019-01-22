<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location: signIn.php');
}else{
	include 'head.php';
	?>
    <div class="row">
    	<div class="col-sm-8 offset-2">
    		<div class="row">
    			<div class="col-sm-8">
    				<h3>Welcome! you are signed in as 
    					<?php 
                        $row = $_SESSION['loginData'];
                        echo $row['f_name'];
    				    ?>
    				</h3>
    			</div>
    			<div class="col-sm-4">
    				<button class="btn btn-primary" onclick="window.location.href= 'logout.php'">logout</button>
    			</div>
    		</div>
    	</div>
    </div>
	<?php
	include "footer.php";
}
?>