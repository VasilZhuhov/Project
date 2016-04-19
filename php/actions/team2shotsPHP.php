<?php 

	require_once('../db.class.php');

	$shotsTeam2 = $_POST['shotsTeam2'];
	$s2 = $_POST['s2'] + 1;
	$match_id = $_POST['match_id'];
	$team2id = $_POST['team2id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $s2";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $shotsTeam2;
		exit;
	}
	if($result[0]['team_id'] == $team2id)
	{
		if(($result[0]['action_id'] == 3) || ($result[0]['action_id'] == 4) || ($result[0]['action_id'] == 2))
		{
			$shotsTeam2++;
		}
	}

	echo $shotsTeam2;
?>