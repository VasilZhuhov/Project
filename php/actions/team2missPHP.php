<?php 

	require_once('../db.class.php');

	$missTeam2 = $_POST['missTeam2'];
	$m2 = $_POST['m2'] + 1;
	$match_id = $_POST['match_id'];
	$team2id = $_POST['team2id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $m2";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $missTeam2;
		exit;
	}

	if($result[0]['team_id'] == $team2id)
	{
		if($result[0]['action_id'] == 3)
		{
			$missTeam2++;
		}
	}

	echo $missTeam2;
?>