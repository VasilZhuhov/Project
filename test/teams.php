<?php
require_once('db.class.php');

echo "<pre>";
/*
$query = 'select * from teams where id=1';

$team1 = $db->fetchArray($query);

$query = 'select * from teams where id=2';

$team2 = $db->fetchArray($query);
*/
$team1 = array(0 => array('id'=>'1','Arsenal','81','79','76','8'));
$team2 = array(0 => array('id'=>'2','Liverpool','77','77','79','7'));

/*print_r ($team1);
print_r ($team2);

$dif = ($team1[0][2]-$team2[0][2]);

print_r($dif);*/


$query = "INSERT INTO `matches` (`id`, `team_1_id`, `team_2_id`) VALUES (NULL, 1, 2)";
$newMatch = $db->fetchArray($query);

$query = "SELECT id FROM matches ORDER BY id DESC LIMIT 1";
$match_id = $db->fetchArray($query);
$match_id = $match_id[0]["id"];

$ballPos = ($team1[0][2]-$team2[0][2] + 50);
//echo "$ballPos <br>";
$chanceCreated = (($team1[0][1]+$team1[0][2])-($team2[0][1]+$team2[0][2]))/2;
//echo "$chanceCreated <br>";
$blockedShotTeam1 = ($team1[0][1]-$team2[0][3]);
$blockedShotTeam2 = ($team2[0][1]-$team1[0][3]);

$missedShotTeam1 = ($team2[0][3]/4);
$missedShotTeam2 = ($team1[0][3]/4);

$team1GK = $team1[0][4];
$team2GK = $team2[0][4];

$goalTeam1 = 0;
$goalTeam2 = 0;

$min = 0;

$data = ["id"=> NULL, "match_id"=> $match_id, "minute"=> 0, "action_id"=> 0, "team_id"=> 0];


while($min <= 89)
{
	$min++;
	$data["minute"] = $min;
    if( rand(0,100) < 36)
    {
    	$data["team_id"] = 1;
		if( rand(0,100) <= $ballPos )
		{
			if( rand(0,100) < 70 + $chanceCreated)
			{
				if( rand(0,100) < 30 - $blockedShotTeam1)
				{
					$data["action_id"] = 5;
					$newMin = $db->saveArray("minutes", $data);
					echo "Blocked shot";
				}
				else
				{
					if( rand(0,100) < 30 + $missedShotTeam1)
					{
						$data["action_id"] = 3;
						$newMin = $db->saveArray("minutes", $data);
						echo "Miss";
					}
					else
					{
						if( rand( 0,100) < 60 + $team1GK)
						{
							$data["action_id"] = 4;
							$newMin = $db->saveArray("minutes", $data);
							echo "Save";
						}
						else
						{
							$data["action_id"] = 2;
							$newMin = $db->saveArray("minutes", $data);
							echo "Goal";
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
			$data["team_id"] = 2;
			if( rand(0,100) < 70 + $chanceCreated)
			{
					if( rand(0,100) < 30 - $blockedShotTeam2)
					{
						$data["action_id"] = 5;
						$newMin = $db->saveArray("minutes", $data);
						echo "Blocked shot";
					}
					else
					{
						if( rand(0,100) < 30 + $missedShotTeam2)
						{
							$data["action_id"] = 3;
							$newMin = $db->saveArray("minutes", $data);
							echo "Miss";
						}
						else
						{
							if( rand( 0,100) < 60 + $team2GK)
							{
								$data["action_id"] = 4;
								$newMin = $db->saveArray("minutes", $data);
								echo "Save";
							}
							else
							{
								$data["action_id"] = 2;
								$newMin = $db->saveArray("minutes", $data);
								echo "Goal";
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
    echo "<br> $min <br>";
}

echo "$goalTeam1  <br>";
echo "$goalTeam2  <br>";

/*
В таблицата minutes на мястото на match_id, minute съм задал да въвежда 1-ници, трябва да въвежда съответното id на мача и минутата. Горе е на Жоро кода за съотвеното взимане на стойности от избраните отбори(не работи) има го и в 
1.php заедно със селекта.Засега взима стойностите от масивите.


*/
?> 