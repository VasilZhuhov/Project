<?php 

    require_once('php/db.class.php');

    $query = 'select * from teams';

    $teams = $db->fetchArray($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">
      
    <link rel="stylesheet" href="css/nav.css">
    <link href="css/game.css" rel="stylesheet">
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
             <ul class='nav navbar-nav'>
                            <li>
                                <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                            </li>
                                <li>
                                    <a href='game.php'>The Game</a>
                                </li>
                                </ul>
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
            <?php
                if(!isset($_SESSION['logged_user']))
                {
                    
                        header('Location: index.php');
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
            <div class='menuImg'>
               <img src='img/cou1.png'>
            </div>
            <div class='menuImg1'>
               <img src='img/sanchez.png'>
            </div>
            <div class="gameButtons">
                <input id="play" class="btn btn-danger" type="submit" value="Play">
                <input id="instructions" class="btn btn-danger" type="submit" value="Instructions">
            </div> 
        </div>
        <!--Instructions-->
        <div class='instructions'>
            <div class='board'>
                <p class='textIns'>Welcome to F. A. league game. To play this game you have to click on the "Play" button in the start Menu, then choose 2 teams from the select options. The team on the left is your team and the team on the right side is going to be your opponent. After finishing your selection click "Start!" and watch the match minute by minute with live statistics update!<br>Enjoy the game!</p>
            </div>
            <div class="insButton">
                <input id="Menu" type='submit' class="btn btn-danger" value="Menu">
            </div>
        </div>
        <!--Team selection-->
        <div>
            <div class='teamSelection'>
                 <div class='yourTeam'>
                    <div class='teamImg'>
                       <img id='mainImg' src="img/1.png">
                    </div>
                    <form method="post" action="game/aftermatch.php">
                        <select id='select' name="team1" class='select'>
                        <?php 
                            foreach($teams as $key=>$team)
                            {   
                                if($key == 0)
                                {
                                     $isSelected = " selected ";
                                }   
                                else
                                {
                                    $isSelected = '';
                                }
                        ?>
                            <option class='changeImg' value="<?php echo $team['id']?>" data-href='img/<?php echo $team['id']?>.png' data-att='<?php echo $team['att']?>' data-mid='<?php echo $team['mid']?>' data-def='<?php echo $team['def']?>' <?php echo $isSelected?> > <?php echo $team['name']?></option>
                          <?php
                        }
                       
                    ?>
                    </select> 

                    <p class='change'>ATT:<span id='attTeam1'>81</span> MID:<span id='midTeam1'>79</span> DEF:<span id='defTeam1'>76</span></p>
                </div>   
                <div class='opponent'>
                    <div class='teamImg1'>
                       <img src="img/2.png" id='mainImg1'>
                    </div>
                    <select id='select1' name='team2' class='select'>
                        <?php 
                            foreach($teams as $key=>$team)
                                {
                                    if($key == 1)
                                    {
                                        $isSelected = " selected ";
                                    }   
                                    else
                                    {
                                        $isSelected = '';
                                    }
                                ?>
                        <option class='changeImg1' value="<?php echo $team['id']?>" data-href='img/<?php echo $team['id']?>.png' data-att='<?php echo $team['att']?>' data-mid='<?php echo $team['mid']?>' data-def='<?php echo $team['def']?>' <?php echo $isSelected ?> > <?php echo $team['name']?></option>
                        <?php
                            }
                        ?>
                    </select>  
                    <p class='change'>ATT:<span id='attTeam2'>77</span> MID:<span id='midTeam2'>77</span> DEF:<span id='defTeam2'>79</span></p>  
                </div>
                <div class="bottomButtons">
                    <input class="btn btn-danger" id='check' type="submit" value="Start!"> 
                </form> 
                    <input id="backToMenu" type='submit' class="btn btn-danger" value="Menu">
                </div>  
            </div>
        </div>

    </div>
  </body>
</html>