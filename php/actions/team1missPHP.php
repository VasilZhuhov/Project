<?php 

	require_once('../db.class.php');

	$missTeam1 = $_POST['missTeam1'];
	$m1 = $_POST['m1'] + 1;
	$match_id = $_POST['match_id'];
	$team1id = $_POST['team1id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $m1";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $missTeam1;
		exit;
	}

	if($result[0]['team_id'] == $team1id)
	{
		if($result[0]['action_id'] == 3)
		{
			$missTeam1++;
		}
	}

	echo $missTeam1;
?>