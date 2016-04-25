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
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/nav.css">
    <script src="http://code.jquery.com/jquery-1.12.1.min.js"> </script>
	<script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/slideshow.js"></script>
s    
</head>

<body>
	

    <!-- Navigation -->
    <nav class="navbar  navbar-fixed-top navbar-default" role="navigation" >
        <div class="container">
            <?php
                if(!isset($_SESSION['logged_user']))
                {
                    echo "
                    
                        <div class='loginButtons'> 
                            <button id='sign' type='button' class='btn btn-danger btn-sm'>
                                <span class='glyphicon glyphicon-paperclip'></span> Sign in
                            </button>					
    					    <button id='log' type='button' class='btn btn-danger btn-sm'>
                                 <span class='glyphicon glyphicon-log-in'></span> Log in
                            </button>
                        </div>
                        <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                    ";
                }
                else
                {
                    echo "
             <ul class='nav navbar-nav'>
                            <li>
                                <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                            </li>
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
                
                        

                    ";
                }
            ?>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
    
    

    <div id="carouselHacked" class="carousel slide carousel-fade shadow" data-ride="carousel">

        <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/project_1a.png">
            <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/project_3.png">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/project_4.png">
                <div class="carousel-caption">                   
                </div>
            </div>
             <div class="item">
                <img src="img/project_51.png">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    

     
   

    </header>

    <!-- Page Content -->
	<br><br>
    <div class="container">
		<br>
		<h1 class="header1">F.A. League</h1>
		<br><br>
        <div class="row">
            <div class="col-lg-12">
				<div class="rowFloat"><img src="img/BPL_1.png"></div>
                <div class="rowFloat rowText"><br><p>Welcome to F.A. League! Pick your favourite team from one of the best Football leagues-Barclays Premier League.</p></div>
            </div>
        </div>
		<br><br>
        <div class="row">
            <div class="col-lg-12">
			<div class="rowFloata" ><img src="img/teams_2.png"></div>
                <div class="rowFloata rowText"><br><p>Chose between few football clubs and simulate the match. The shown results will not dissapoint you!</p></div>
            </div>
        </div>
		<br><br>
        <div class="row">
            <div class="col-lg-12">
				<div class="rowFloat"><img src="img/manager_32.png"></div>
                <div class="rowFloat rowText"><br><p>Try to beat few world class managers and prove yourself on the world scene.</p></div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="rowFloat rowtext rowText">
                        <h2>F.A. League</h2>
                        <p>The web was created by 2 students to test their front-end and back-end skills. After a successful registration, the user can log in and play football simulator game.</p>
                    </div>
                <div class="rowFloat rowText ">
                    <h2>Нашите социални мрежи: </h2>
                    <a class="facebook" href="#"></a>
                    <a class="google" href="#"></a> 
                    <a class="instagram" href="#"></a>  
                    <a class="skype" href="#"></a>
                    <a class="youtube" href="#"></a>
                </div>
            </div>




            </div>
            <!-- /.row -->
        </footer>

    </div>
    <div id="logShow">
        <div class="overlay" id="exitLog">
    </div>
        <div>
            <div class="log">
    
                <form  method="post" action="php/login_db.php">
                    <h1>Login</h1>
                    <input type="text" name="username_log" placeholder="Username" required="required" />
                    <label class="logvalidation"></label>
                    <input id='log1' type="password" name="password_log" placeholder="Password" required="required" />
                    <label id='log2' class="logvalidations"></label>
                    <input class="btn btn-danger" id='logDis' type="submit" value="Login now!">

					<p class="toggleRegForm" id="openReg">or <span class="toggleRegister">Register now</span>?</p>
                </form>
            </div>
        </div>
    </div>

    <div id="signShow">
      <div class="overlay" id="exitSign">
        </div>  
        <div>
            <div class="sign">
                <form id="signup" method="post" action="php/register_db.php" enctype="multipart/form-data">
                    <h1>Sign in</h1>
                    <div class="white_space">
                    <input class="validation" type="text" name="username_sign" placeholder="Username" required="required" onkeyup="" />
                    <label class="validation-info"></label>
                    </div>
                    <!--Remove Later-->
                    <div class="white_space">
                    <input class="validation" type="password" name="password_sign" placeholder="Password" required="required" onkeyup=""/>
                    <label class="validation-info"></label>
                    </div>
                    <div class="white_space">
                    <input class="validation" type="password" name="password_2" placeholder="Repeat Password" required="required" />
                    <label class="validation-info"></label>
                    </div>
                    <div class="white_space">
                    <input class="validation" type="email" name="email" placeholder="email" required="required" />
                    <label class="validation-info"></label>
                    </div>
                    <div class="white_space">
                    <input class="validation" type="text" name="first_name" placeholder="First name" required="required" />
                    <label class="validation-info"></label>
                    </div>
                    <div class="white_space">
                    <input class="validation" type="text" name="second_name" placeholder="Last name" required="required" />
                    <label class="validation-info"></label>
                    </div>
                    <select name="team" id="teams" >
                        <option value="Arsenal" selected>Arsenal</option>
                        <option value="Liverpool" >Liverpool</option>
                        <option value="Man City" >Man City</option>
                        <option value="Chelsea" >Chelsea</option>
                        <option value="Leicester" >Leicester</option>
                    </select>
                    <div class="white_space" >
                    <input class="validation" type="file" name="image">
                    <label class="validation-info"></label>
                    </div>
                    <input class="btn btn-danger ivan" type="submit" value="Sign now!">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
