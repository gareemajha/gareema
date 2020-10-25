<?php session_start();
require_once('common.php');

//Code for Registration 
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$city=$_POST['contact'];
	$address=$_POST['address'];
	$enc_password=$password;
	$msg=mysqli_query($con,"insert into users(name,email,password,contact,city,address) values('$name','$email','$enc_password','$contact','$city','$address')");
if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
     include "includes/header.php";
     ?>
			 <div class="container">
        <div class="row row_style">
        <div class="col-xs-6">
        <div class="panel panel-primary">
        <div class="panel-heading">
            
        </div><br><br>
         <div class="panel-body">
         <h2>SIGN UP</h2>
         </div>
							<form name="registration" method="post" action="" enctype="multipart/form-data">
								<p> Name </p>
								<input type="text" class="text" value=""  name="name" required >
								<p>Email Address </p>
								<input type="text" class="text" value="" name="email"  >
								<p>Password </p>
								<input type="password" value="" name="password" required>
								<p>Contact No. </p>
								<input type="text" value="" name="contact"  required>
								<p>City </p>
								<input type="text" value="" name="city"  required>
								<p>Address </p>
								<input type="text" value="" name="address"  required>
								<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" name="signup"  value="Sign Up" >
									<div class="clear"> </div>
								</div>
							</form>
<div class="panel-footer">
        <h4>Don't have an account?<a href="#">Register</a></h4>
    </div>
</div>
        </div>
        </div>
        </div>
</body>
</html>

						
