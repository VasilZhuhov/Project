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
$goalTeam1 = 0;
$goalTeam2 = 0;
$ballPos = ($team1[0][2]-$team2[0][2] + 50);

$chanceCreated = (($team1[0][1]+$team1[0][2])-($team2[0][1]+$team2[0][2]))/2;

$blockedShotTeam1 = ($team1[0][1]-$team2[0][3]);
$blockedShotTeam2 = ($team2[0][1]-$team1[0][3]);

$missedShotTeam1 = ($team2[0][3]/4);
$missedShotTeam2 = ($team1[0][3]/4);

$team1GK = $team1[0][4];
$team2GK = $team2[0][4];

$min = 0;
$goal["scoredgoals"] = 0;

$goal["concededgoals"] = 0;


$goal = ["id"=> NULL, "username_sign"=>$_SESSION['logged_user']['username_sign'], "password_sign"=> $_SESSION['logged_user']['password_sign'], "email"=>$_SESSION['logged_user']['email'],"first_name"=>$_SESSION['logged_user']['first_name'],"second_name"=>$_SESSION['logged_user']['second_name'],"team"=>$_SESSION['logged_user']['team'],"avatar"=>$_SESSION['logged_user']['avatar'],"wins"=>$_SESSION['logged_user']['wins'],"losses"=>$_SESSION['logged_user']['losses'],"draws"=>$_SESSION['logged_user']['draws'],"team"=>$_SESSION['logged_user']['team'],"scoredgoals"=>$_SESSION['logged_user']['scoredgoals'],"concededgoals"=>$_SESSION['logged_user']['concededgoals'] ];
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
							$goal["scoredgoals"]++;
							$query = Array("id"=>$_SESSION['logged_user']['id'],
											"scoredgoals"=>$goal["scoredgoals"]);
							$_SESSION['logged_user']['scoredgoals'] = $goal["scoredgoals"];
							$db->updateRow("users", $query);
							$goalTeam1++;
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
								$goal["concededgoals"]++;
								$query = Array("id"=>$_SESSION['logged_user']['id'],
											"concededgoals"=>$goal["concededgoals"]);
								$_SESSION['logged_user']['concededgoals'] = $goal["concededgoals"];
								$db->updateRow("users", $query);
								$goalTeam2++;


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
if($goalTeam1>$goalTeam2)
	{
		$goal["wins"]++;
		$query = Array("id"=>$_SESSION['logged_user']['id'],
					"wins"=>$goal["wins"]);
		$_SESSION['logged_user']['wins'] = $goal["wins"];
		$db->updateRow("users", $query);

	}
	elseif($goalTeam1<$goalTeam2)
	{
		$goal["losses"]++;
		$query = Array("id"=>$_SESSION['logged_user']['id'],
					"losses"=>$goal["losses"]);
		$_SESSION['logged_user']['losses'] = $goal["losses"];
		$db->updateRow("users", $query);
	}
	else
	{
		$goal["draws"]++;
		$query = Array("id"=>$_SESSION['logged_user']['id'],
					"draws"=>$goal["draws"]);
		$_SESSION['logged_user']['draws'] = $goal["draws"];
		$db->updateRow("users", $query);		
	}
?>
