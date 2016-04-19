<?php 

	require_once('../db.class.php');

	$shotsTeam1 = $_POST['shotsTeam1'];
	$s1 = $_POST['s1'] + 1;
	$match_id = $_POST['match_id'];
	$team1id = $_POST['team1id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $s1";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo $shotsTeam1;
		exit;
	}
	if($result[0]['team_id'] == $team1id)
	{
		if(($result[0]['action_id'] == 3) || ($result[0]['action_id'] == 4) || ($result[0]['action_id'] == 2))
		{
			$shotsTeam1++;
		}
	}

	echo $shotsTeam1;
?>