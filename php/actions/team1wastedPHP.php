<?php 

	require_once('../db.class.php');

	$wastedTeam1 = $_POST['wastedTeam1'];
	$w1 = $_POST['w1'] + 1;
	$match_id = $_POST['match_id'];
	$team1id = $_POST['team1id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $w1";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $wastedTeam1;
		exit;
	}

	if($result[0]['team_id'] == $team1id)
	{
		if(($result[0]['action_id'] == 1) || ($result[0]['action_id'] == 5))
		{
			$wastedTeam1++;
		}
	}

	echo $wastedTeam1;
?>