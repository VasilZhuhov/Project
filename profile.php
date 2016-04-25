
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
             <ul class='nav navbar-nav'>
                            <li>
                                <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                            </li>
                                <li>
                                    <a href='game.php'>The Game</a>
                                </li>
                                </ul>
                                <div class='loginButtons'>
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
            </div>
        </div>
    </nav>

      <?php
  
   
          if($_SESSION['logged_user']['team'] == 'Arsenal')
          {
            echo "
                <div class='profile_arsenal'>

                    <img  src=".$_SESSION['logged_user']['avatar'].">
                    <div class='names'>
                   ".$_SESSION['logged_user']['first_name']."

                    ".$_SESSION['logged_user']['second_name']."
                    (".$_SESSION['logged_user']['username_sign'].")
                     </div>
                </div>   

                             <div class='scoreboard'>
                       <div class='wins WLD'>
                               <label>Wins</label>
                               <label>Losses</label>
                               <label>Draws</label>
                               <div class='stati'>
                               <label>".$_SESSION['logged_user']['wins']."</label>
                               <label>".$_SESSION['logged_user']['losses']."</label>
                               <label>".$_SESSION['logged_user']['draws']."</label>
                               </div>
                      </div>
                      <div class='wins'>
                               <label>Goal Scored</label>
                               <label>Goal Conceded</label>
                      </div>         
                      <div class='stat'>
                               <label class='goal'>".$_SESSION['logged_user']['scoredgoals']."</label>
                               <label class='conGoal'>".$_SESSION['logged_user']['concededgoals']."</label>  
                       </div> 
                        

                   </div>


                        
                     


                        ";
          }
          if($_SESSION['logged_user']['team'] == 'Liverpool')
          {
            echo "
                <div class='profile_liverpool'>

                    <img  src=".$_SESSION['logged_user']['avatar'].">
                    <div class='names'>
                   ".$_SESSION['logged_user']['first_name']."

                    ".$_SESSION['logged_user']['second_name']."
                    (".$_SESSION['logged_user']['username_sign'].")
                     </div>
                </div>   

               <div class='scoreboard'>
                       <div class='wins WLD'>
                               <label>Wins</label>
                               <label>Losses</label>
                               <label>Draws</label>
                               <div class='stati'>
                               <label>".$_SESSION['logged_user']['wins']."</label>
                               <label>".$_SESSION['logged_user']['losses']."</label>
                               <label>".$_SESSION['logged_user']['draws']."</label>
                               </div>
                      </div>
                      <div class='wins'>
                               <label>Goal Scored</label>
                               <label>Goal Conceded</label>
                      </div>         
                      <div class='stat'>
                               <label class='goal'>".$_SESSION['logged_user']['scoredgoals']."</label>
                               <label class='conGoal'>".$_SESSION['logged_user']['concededgoals']."</label>  
                       </div> 
                        

                   </div>

                

                         
                    

                        ";
          }
          if($_SESSION['logged_user']['team'] == 'Man City')
          {
            echo "
                <div class='profile_mancity'>

                     <img  src=".$_SESSION['logged_user']['avatar'].">
                    <div class='names'>
                   ".$_SESSION['logged_user']['first_name']."

                    ".$_SESSION['logged_user']['second_name']."
                    (".$_SESSION['logged_user']['username_sign'].")
                     </div>
                    
                </div>

               <div class='scoreboard'>
                       <div class='wins WLD'>
                               <label>Wins</label>
                               <label>Losses</label>
                               <label>Draws</label>
                               <div class='stati'>
                               <label>".$_SESSION['logged_user']['wins']."</label>
                               <label>".$_SESSION['logged_user']['losses']."</label>
                               <label>".$_SESSION['logged_user']['draws']."</label>
                               </div>
                      </div>
                      <div class='wins'>
                               <label>Goal Scored</label>
                               <label>Goal Conceded</label>
                      </div>         
                      <div class='stat'>
                               <label class='goal'>".$_SESSION['logged_user']['scoredgoals']."</label>
                               <label class='conGoal'>".$_SESSION['logged_user']['concededgoals']."</label>  
                       </div> 
                        

                   </div>
                

                        
                        


                        ";
          }
          if($_SESSION['logged_user']['team'] == 'Chelsea')
          {
            echo "
            
                <div class='profile_chelsea'>

                    <img  src=".$_SESSION['logged_user']['avatar'].">
                    <div class='names'>
                   ".$_SESSION['logged_user']['first_name']."

                    ".$_SESSION['logged_user']['second_name']."
                    (".$_SESSION['logged_user']['username_sign'].")
                     </div>

                </div>   

               
                

                   <div class='scoreboard'>
                       <div class='wins WLD'>
                               <label>Wins</label>
                               <label>Losses</label>
                               <label>Draws</label>
                               <div class='stati'>
                               <label>".$_SESSION['logged_user']['wins']."</label>
                               <label>".$_SESSION['logged_user']['losses']."</label>
                               <label>".$_SESSION['logged_user']['draws']."</label>
                               </div>
                      </div>
                      <div class='wins'>
                               <label>Goal Scored</label>
                               <label>Goal Conceded</label>
                      </div>         
                      <div class='stat'>
                               <label class='goal'>".$_SESSION['logged_user']['scoredgoals']."</label>
                               <label class='conGoal'>".$_SESSION['logged_user']['concededgoals']."</label>  
                       </div> 
                        

                   </div>




                        ";
          }

          if($_SESSION['logged_user']['team'] == 'Leicester')
          {
            echo "
            
                <div class='profile_leicester'>

                    <img  src=".$_SESSION['logged_user']['avatar'].">
                    <div class='names'>
                   ".$_SESSION['logged_user']['first_name']."

                    ".$_SESSION['logged_user']['second_name']."
                    (".$_SESSION['logged_user']['username_sign'].")
                     </div>

                </div>   

               
                

                   <div class='scoreboard'>
                       <div class='wins WLD'>
                               <label>Wins</label>
                               <label>Losses</label>
                               <label>Draws</label>
                               <div class='stati'>
                               <label>".$_SESSION['logged_user']['wins']."</label>
                               <label>".$_SESSION['logged_user']['losses']."</label>
                               <label>".$_SESSION['logged_user']['draws']."</label>
                               </div>
                      </div>
                      <div class='wins'>
                               <label>Goal Scored</label>
                               <label>Goal Conceded</label>
                      </div>         
                      <div class='stat'>
                               <label class='goal'>".$_SESSION['logged_user']['scoredgoals']."</label>
                               <label class='conGoal'>".$_SESSION['logged_user']['concededgoals']."</label>  
                       </div> 
                        

                   </div>




                        ";
          }


   ?>
  </body>

</html>
<!--
 <ul id='profile_page'>
    <li><img src=".$_SESSION['logged_user']['avatar']."></li>
    <li><label>Username: </label>".$_SESSION['logged_user']['username_sign']."</li>
    <li><label>First Name: </label>".$_SESSION['logged_user']['first_name']."</li>
    <li><label>Last Name: </label>".$_SESSION['logged_user']['second_name']."</li>
    <li><label>Team: </label>".$_SESSION['logged_user']['team']."</li>
   </ul>