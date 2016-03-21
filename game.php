<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/nav.css">
	  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  

    
</head>

<body>
	<script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>

    <!-- Navigation -->
    <nav class="navbar  navbar-fixed-top navbar-default" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-brand-default" href="index.php">Kygen</a>
            </div>
            <?php
                if(!isset($_SESSION['logged_user']))
                {
                    echo "
                        <div class='loginButtons'>
                            <img class='loginButtons' src='img/edit-icon.png' id='sign'>  
    						<img class='loginButtons' src='img/login.png' id='log'>						
    					</div>
                    ";
                }
                else
                {
                    echo "
                       <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <ul class='nav navbar-nav'>
                                <li>
                                    <a href='game.php'>The Game</a>
                                </li>
                                </ul>
                                    <span id='hello' href='#'>Hello, ".$_SESSION['logged_user']['username_sign']."</span>
                                <div class='loginButtons'>
                                    <a href='logout.php'><img class='loginButtons' src='img/logout.png' ></a>
                                    <img class='loginButtons' src='img/profile.png' >
                                </div>
                        </div>

                    ";
                }
            ?>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  </body>
</html>