<?php 

	require_once('../db.class.php');

	$wastedTeam2 = $_POST['wastedTeam2'];
	$w2 = $_POST['w2'] + 1;
	$match_id = $_POST['match_id'];
	$team2id = $_POST['team2id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $w2";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $wastedTeam2;
		exit;
	}

	if($result[0]['team_id'] == $team2id)
	{
		if(($result[0]['action_id'] == 1) || ($result[0]['action_id'] == 5))
		{
			$wastedTeam2++;
		}
	}

	echo $wastedTeam2;
?>