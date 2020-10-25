<?php
require_once('common.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$email=$_POST['email'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="products.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}

?>	
<!DOCTYPE html>

    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <link rel="stylesheet" type="text/css" href="stylee.css">


        <!--jQuery library--> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



        <!--Latest compiled and minified JavaScript--> 

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Navbar in Bootstrap</title>

    </head>
    <nav class="navbar navbar-inverse  navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href ="#" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div>
                
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li></ul>
                     <ul class="nav navbar-nav navbar-right">

                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    </ul>
            </div>
            </div>

        </nav> 
        <div class="container">
        <div class="row row_style">
        <div class="col-xs-4">
        <div class="panel panel-primary">
        <div class="panel-heading">
        </div><br><br>
         <div class="panel-body">
         <p>Login to make a purchase</p>
        </div>
        <form name="login" method="POST">
           
                <div class="form-group">
                    
                    <input type="text" class="form-control input-lg" placeholder="Email"  name="email"><br><br></div>
                <div class="form-group">
                    <input type="password"  class="form-control input-lg" placeholder="password" name="password"><br><br>
                </div>
                <button>
                    <input type="submit" name="login" value="login"  class="btn btn-primary btn-block"></button>
                    <div class="panel-footer">
        <h4>Don't have an account?<a href="#">Register</a></h4>
    </div>
        </form>
        </div>
        </div>
        </div>
        </div>
       <?php
        include "includes/footer.php"
       ?>
        </body>
</html>
