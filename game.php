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
    <link href="css/game.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/nav.css">
	  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script type="text/javascript"></script>
  

    
</head>

<body>
	<script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/game.js"></script>

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
            </div>
            <?php
                if(!isset($_SESSION['logged_user']))
                {
                    
                        header('Location: index.php');
                }
                else
                {
                    echo "
                       <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <ul class='nav navbar-nav'>
                                <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                                <li>
                                    <a href='game.php'>The Game</a>
                                </li>
                                </ul>
                                    <span id='hello' href='#'>Hello, ".$_SESSION['logged_user']['username_sign']."</span>
                                <div class='loginButtons'>
                                    <a href='profile.php'>
                                        <button type='button' class='btn btn-danger btn-sm'>
                                            <span  class='glyphicon glyphicon-user'></span> Profile
                                        </button>
                                    </a>
                                    <a href='php/logout.php'>
                                        <button type='button' class='btn btn-danger btn-sm'>
                                            <span  class='glyphicon glyphicon-off'></span> Off 
                                        </button>
                                    </a>
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

    <div class="gamebg">
        <!--Game menu-->
        <div class="menu">
            <img class='backg' src="img/stadium.jpg">
            <div class='menuImg'>
               <img src='img/cou.png'>
            </div>
            <div class='menuImg1'>
               <img src='img/sanchez.png'>
            </div>
            <div class="gameButtons">
                <input id="play" class="btn btn-danger" type="submit" value="Play">
                <input id="" class="btn btn-danger" type="submit" value="Instructions">
                <input id="" class="btn btn-danger" type="submit" value="Team stats">
            </div>
        </div>
        <!--Team selection-->
        <div>
            <div class='teamSelection'>
                <div class='yourTeam'>
                    <div class='teamImg'>
                       <img id='mainImg' src="img/1.png">
                    </div>
                    <select class='select'>
                        <option class='changeImg' value="Arsenal" data-href='img/1.png' href='ATT:81 MID:79 DEF:76' selected>Arsenal</option>
                        <option class='changeImg' value="Liverpool" data-href='img/3.png'  href='ATT:77 MID:77 DEF:79'>Liverpool</option>
                        <option class='changeImg' value="Man City" data-href='img/4.png'  href='ATT:81 MID:81 DEF:81'>Manchester City</option>
                        <option class='changeImg' value="Chelsea" data-href='img/2.png'  href='ATT:83 MID:82 DEF:81'>Chelsea</option>
                    </select>
                        <p id='mainStat' class='change'>ATT:81 MID:79 DEF:76</p>
                </div>   
                <div class='opponent'>
                    <div class='teamImg1'>
                       <img src="img/3.png" id='mainImg1'>
                    </div>
                    <select class='select'>
                        <option class='changeImg1' value="Arsenal" data-href='img/1.png' href='ATT:81 MID:79 DEF:76'>Arsenal</option>
                        <option class='changeImg1' value="Liverpool" data-href='img/3.png' href='ATT:77 MID:77 DEF:79' selected>Liverpool</option>
                        <option class='changeImg1' value="Man City" data-href='img/4.png' href='ATT:81 MID:81 DEF:81'>Manchester City</option>
                        <option class='changeImg1' value="Chelsea" data-href='img/2.png' href='ATT:83 MID:82 DEF:81'>Chelsea</option>
                    </select>  
                    <p id='mainStat1' class='change'>ATT:77 MID:77 DEF:79</p>  
                </div> 
                <div class="bottomButtons">
                    <input id="" class="btn btn-danger" type="submit" value="Start!">  
                    <input id="backToMenu" class="btn btn-danger" type="submit" value="Menu">
                </div>  
            </div>
        </div>

    </div>
  </body>
</html>