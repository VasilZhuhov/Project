<?php
require_once('../php/db.class.php');

$query = 'select * from teams';

$teams = $db->fetchArray($query);

foreach($teams as $key=>$team)
{
	$key1 = $key + 1;
	if($_POST['team1'] == $key1)
	{
    	$team1 = array(0 => array('id' => $team['id'], $team['name'], $team['att'], $team['mid'], $team['def'], $team['gk']));
		$homeTeamId = $key1;
	}
}
foreach($teams as $key=>$team)
{
	$key1 = $key + 1;
	if($_POST['team2'] == $key1)
	{
    	$team2 = array(0 => array('id' => $team['id'], $team['name'], $team['att'], $team['mid'], $team['def'], $team['gk']));
		$awayTeamId = $key1;
	}
}

$query = ["id"=> NULL, "team_1_id" => $homeTeamId, "team_2_id" => $awayTeamId];
$newMatch = $db->saveArray("matches", $query);

$query = "SELECT id FROM matches ORDER BY id DESC LIMIT 1";
$match_id = $db->fetchArray($query);
$match_id = $match_id[0]["id"];

$ballPos = ($team1[0][2]-$team2[0][2] + 50);

$chanceCreated = (($team1[0][1]+$team1[0][2])-($team2[0][1]+$team2[0][2]))/2;

$blockedShotTeam1 = ($team1[0][1]-$team2[0][3]);
$blockedShotTeam2 = ($team2[0][1]-$team1[0][3]);

$missedShotTeam1 = ($team2[0][3]/4);
$missedShotTeam2 = ($team1[0][3]/4);

$team1GK = $team1[0][4];
$team2GK = $team2[0][4];

$savesTeam1 = 0;
$savesTeam2 = 0;

$missesT1 = 0;
$missesT2 = 0;

$shotsT1 = 0;
$shotsT2 = 0;

$min = 0;

$data = ["id"=> NULL, "match_id"=> $match_id, "minute"=> 0, "action_id"=> 0, "team_id"=> 0];


while($min <= 89)
{
	$min++;
	$data["minute"] = $min;
    if( rand(0,100) < 36)
    {
    	$data["team_id"] = $homeTeamId;
		if( rand(0,100) <= $ballPos )
		{
			if( rand(0,100) < 70 + $chanceCreated)
			{
				if( rand(0,100) < 30 - $blockedShotTeam1)
				{
					$data["action_id"] = 5;
					$newMin = $db->saveArray("minutes", $data);
				}
				else
				{
					if( rand(0,100) < 30 + $missedShotTeam1)
					{
						$data["action_id"] = 3;
						$newMin = $db->saveArray("minutes", $data);
						$missesT1++;
					
					}
					else
					{
						if( rand( 0,100) < 60 + $team1GK)
						{
							$data["action_id"] = 4;
							$newMin = $db->saveArray("minutes", $data);
						
						}
						else
						{
							$data["action_id"] = 2;
							$newMin = $db->saveArray("minutes", $data);
						}
					}
				}
			}
			else
			{
				$data["action_id"] = 1;
				$newMin = $db->saveArray("minutes", $data);
			}
		  
		}
		else
		{
			$data["team_id"] = $awayTeamId;
			if( rand(0,100) < 70 + $chanceCreated)
			{
					if( rand(0,100) < 30 - $blockedShotTeam2)
					{
						$data["action_id"] = 5;
						$newMin = $db->saveArray("minutes", $data);
					}
					else
					{
						if( rand(0,100) < 30 + $missedShotTeam2)
						{
							$data["action_id"] = 3;
							$newMin = $db->saveArray("minutes", $data);
							$missesT2++;
						}
						else
						{
							if( rand( 0,100) < 60 + $team2GK)
							{
								$data["action_id"] = 4;
								$newMin = $db->saveArray("minutes", $data);
							}
							else
							{
								$data["action_id"] = 2;
								$newMin = $db->saveArray("minutes", $data);
							}
						}
					}
			}
			else
			{
				$data["action_id"] = 1;
				$newMin = $db->saveArray("minutes", $data);
			}
			
		}
	}
	else
	{
		$data["action_id"] = 6;
		$data["team_id"] = 0;
		$newMin = $db->saveArray("minutes", $data);
	}
}
?>
