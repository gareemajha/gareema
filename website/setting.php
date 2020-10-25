<html>

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
<body>
<nav class="navbar navbar-inverse  navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href ="#" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div>
                
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li></ul>
                     <ul class="nav navbar-nav navbar-right">

                        <li><a href="setting.html"><span class="glyphicon glyphicon-cog"></span> setting</a></li>

                    </ul>
                      <ul class="nav navbar-nav navbar-right">

                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>

                    </ul>
            </div>
            </div>

        </nav>
<br><br><br><br>

<form>
<input type="text" placeholder="change password" name="change password">
<br><br>
<input type="text" placeholder="New password" name="New password">
<br><br>
<input type="text" placeholder="Re-type password" name="Re-type password">
<br><br>
<input type="submit">
</form>
<?php
     include "includes/footer.php";
     ?>
</body>
</html>