<?php

require_once('ajax.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<link href="../css/bootstrap.css" rel="stylesheet"> 
		<link href="../css/main.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.12.1.min.js"> </script> 
	</head>
	<body>
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