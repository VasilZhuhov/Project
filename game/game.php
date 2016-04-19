<?php  

/*
 * 
 * 
 * 
 * 
 * 
SELECT matches.id, matches.team_1_id, matches.team_2_id, team1.name as team1_name, team2.name as team2_name, minutes.minute, actions.name as action_name, teams.name as action_team_name FROM `matches`  
inner join teams as team1 on matches.team_1_id = team1.id
inner join teams as team2 on matches.team_2_id = team2.id
inner join `minutes` on minutes.match_id = matches.id
inner join actions on minutes.action_id = actions.id
left join `teams` on minutes.team_id = teams.id
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

require_once('../php/db.class.php');

$query = 'select * from teams';

$teams = $db->fetchArray($query);

?>
<!DOCTYPE html>
<html>
	
	<head>
		<script src="http://code.jquery.com/jquery-1.12.1.min.js"> </script>
		<script src="/main.js"></script>
		<link href="../css/main.css" rel="stylesheet"> 
	</head>
	
	<body>
		 <form method="post" action="aftermatch.php">
			<select id='select' name="team1">
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
                    <select id='select1' name='team2'>
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
                    <option class='changeImg1' value="<?php echo $team['id']?>" data-href='img/<?php echo $team['id']?>.png' data-att='<?php echo $team['att']?>' data-mid='<?php echo $team['mid']?>' data-def='<?php echo $team['def']?>' <?php echo $isSelected?> > <?php echo $team['name']?></option>
                		<?php
					 		}
						?>
                  	</select>  
                <input type='submit' name='submit' value'Get teams info'>
       	</form>
        <br>
	</body>
	
</html>