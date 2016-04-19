<?php 

	require_once('../db.class.php');

	$goalTeam2 = $_POST['goalTeam2'];
	$g2 = $_POST['g2'] + 1;
	$match_id = $_POST['match_id'];
	$team2id = $_POST['team2id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $g2";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $goalTeam2;
		exit;
	}
	if($result[0]['team_id'] == $team2id)
	{
		if($result[0]['action_id'] == 2)
		{
			$goalTeam2++;
		}
	}

	echo $goalTeam2;
?>