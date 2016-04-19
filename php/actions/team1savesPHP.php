<?php 

	require_once('../db.class.php');

	$savesTeam1 = $_POST['savesTeam1'];
	$saves1 = $_POST['saves1'] + 1;
	$match_id = $_POST['match_id'];
	$team1id = $_POST['team1id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $saves1";
	$result = $db->fetchArray($query);


	if(count($result) == 0)
	{
		echo $savesTeam1;
		exit;
	}
	if($result[0]['team_id'] == $team1id)
	{
		if($result[0]['action_id'] == 4)
		{
			$savesTeam1++;
		}
	}

	echo $savesTeam1;
?>