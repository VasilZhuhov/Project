<?php

require_once('ajax.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<link href="../css/bootstrap.css" rel="stylesheet"> 
		<link href="../css/main.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.12.1.min.js"> </script> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/nav.css">
        <title>Result</title>
	</head>
	<body>
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
                    
                        header('Location: ../index.php');
                }
                else
                {
                    echo "
                       <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <ul class='nav navbar-nav'>
                                <a class='navbar-brand navbar-brand-default' href='../index.php'>F.A. League</a>
                                <li>
                                    <a href='../game.php'>The Game</a>
                                </li>
                                </ul>
                                    <span id='hello' href='#'>Hello, ".$_SESSION['logged_user']['username_sign']."</span>
                                <div class='loginButtons'>
                                    <a href='../profile.php'>
                                        <button type='button' class='btn btn-danger btn-sm'>
                                            <span  class='glyphicon glyphicon-user'></span> Profile
                                        </button>
                                    </a>
                                    <a href='../php/logout.php'>
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
        <div class="menu">
            <img class='backg' src="../img/stadium.jpg">
        </div>
    </div>
 		<div>
            <div class='teamSelection'>
                <div class='yourTeam'>
                    <div class='teamImg'>
                       	<img src="../img/<?php echo $team1[0]['id']?>.png">
                    </div>
                    <div class='teamShots' id='shotsT1'>
                    	0
                    </div>
                    <div class='teamSaves' id='savesT1'>
                    	0
                    </div>
                    <div class='teamMisses' id='missT1'>
                    	0
                    </div>
                    <div class='wasted' id='wastedT1'>
                        0
                    </div>
                </div> 
                <div class='stats'>
                	<div class='result'>
                		<span id='teamgoal1'>0</span>
                		-
                		<span id='teamgoal2'>0</span>
                	</div>
                	<div class='min' id='min'>0</div>
                	<div class='shots'>Shots</div>
                	<div class='saves'>Saves</div>
                	<div class='misses'>Misses</div>
                    <div class='wastes'>Wasted oppurtunities</div>
                </div>  
                <div class='opponent'>
                    <div class='teamImg1'>
                      	<img src="../img/<?php echo $team2[0]['id']?>.png">
                    </div>
                    <div class='teamShots' id='shotsT2'>
                    	0
                    </div>
                     <div class='teamSaves' id='savesT2'>
                    	0
                    </div>
                    <div class='teamMisses' id='missT2'>
                    	0
                    </div>
                    <div class='wasted' id='wastedT2'>
                        0
                    </div>
                </div> 
            </div>
        </div> 





	<!--  <div class='teams'> -->
			<!-- <img class='backg' src="img/stadium.jpg"> -->
				<!-- <div class='result'>
					<div class='teamImg'>
					<?php echo $team1[0][0]?>
					</div>
					<div class='min' id='min'>0</div>
					<div class='teamImg1'>
					<?php echo $team2[0][0]?>
					</div>
				</div> -->
		</div> 
	</body>
</html>