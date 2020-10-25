<!DOCTYPE html>
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

                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li></ul>
                     <ul class="nav navbar-nav navbar-right">

                        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> setting</a></li>

                    </ul>
                      <ul class="nav navbar-nav navbar-right">

                        <li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>

                    </ul>
            </div>
            </div>

        </nav>
<br><br><br>
    <div class="container ">
    <div class="row">
    <div class="col-xs-3 column_style">
     Item number
    </div>
    <div class="col-lg-3 column_style">
     Item name
    </div>
    <div class="col-lg-3 column_style">
     Price
    </div>
    <div class="col-lg-3 column_style">
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 column_style">
    </div>
    <div class="col-lg-3 column_style">
    </div>
    <div class="col-lg-3 column_style">
    </div>
    <div class="col-lg-3 column_style">
    </div>
    </div>
     <div class="row">
    <div class="col-lg-3 column_style">
     Item number
    </div>
    <div class="col-lg-3 column_style">
     Total
    </div>
    <div class="col-lg-3 column_style">
     Rs 0/-
    </div>
    <div class="col-lg-3 column_style">
    <button class="btn btn-primary">confirm order</button>
    </div>
    </div>
<?php
     include "includes/footer.php";
     ?>
</div>
</body>
</html>