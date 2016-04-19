<?php 

	require_once('../db.class.php');

	$savesTeam2 = $_POST['savesTeam2'];
	$saves2 = $_POST['saves2'] + 1;
	$match_id = $_POST['match_id'];
	$team2id = $_POST['team2id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $saves2";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $savesTeam2;
		exit;
	}
	if($result[0]['team_id'] == $team2id)
	{
		if($result[0]['action_id'] == 4)
		{
			$savesTeam2++;
		}
	}

	echo $savesTeam2;
?>