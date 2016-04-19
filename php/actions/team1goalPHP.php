<?php 

	require_once('../db.class.php');

	$goalTeam1 = $_POST['goalTeam1'];
	$g1 = $_POST['g1'] + 1;
	$match_id = $_POST['match_id'];
	$team1id = $_POST['team1id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $g1";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $goalTeam1;
		exit;
	}

	if($result[0]['team_id'] == $team1id)
	{
		if($result[0]['action_id'] == 2)
		{
			$goalTeam1++;
		}
	}

	echo $goalTeam1;
?>