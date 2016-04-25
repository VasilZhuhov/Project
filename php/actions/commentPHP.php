<?php 

	require_once('../db.class.php');

	$query = 'select * from teams';

	$teams = $db->fetchArray($query);

	$c = $_POST['c'] + 1;
	$match_id = $_POST['match_id'];
	$team1id = $_POST['team1id'];
	$team2id = $_POST['team2id'];


	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $c";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{	
		echo "Full time";
		exit;
	}

	if($result[0]['team_id'] == $team1id)
	{
		$id = $team1id;
		$opId = $team2id;
	}
	else
	{
		$id = $team2id;
		$opId = $team1id;
	}
	
	foreach($teams as $key=>$team)
	{
		if($id == $key+1)
		{
			$name = $team['name'];
		}
	}

	if($id == 1)
	{
		$players = Array ("Cech","Koscielny","Gabriel","Cazorla","Sanchez","Giroud");
	}
	elseif($id == 2)
	{
		$players = Array ("Mignolet","Lovren","Sakho","Can","Coutinho","Sturridge");
	}
	elseif($id == 3)
	{
		$players = Array ("Hart","Otamendi","Kompany","Yaya Toure","Silva","Aguero");
	}
	elseif($id == 4)
	{
		$players = Array ("Courtois","Zouma","Cahill","Willian","Hazard","Costa");
	}
	else
	{
		$players = Array ("Schmeichel","Morgan","Huth","Kante","Mahrez","Vardy");
	}

	if($opId == 1)
	{
		$opPlayers = Array ("Cech","Koscielny","Gabriel","Cazorla","Sanchez","Giroud");
	}
	elseif($opId == 2)
	{
		$opPlayers = Array ("Mignolet","Lovren","Sakho","Can","Coutinho","Sturridge");
	}
	elseif($opId == 3)
	{
		$opPlayers = Array ("Hart","Otamendi","Kompany","Yaya Toure","Silva","Aguero");
	}
	elseif($opId == 4)
	{
		$opPlayers = Array ("Courtois","Zouma","Cahill","Willian","Hazard","Costa");
	}
	else
	{
		$opPlayers = Array ("Schmeichel","Morgan","Huth","Kante","Mahrez","Vardy");
	}

	$rand = rand(0,100);
	$randB = rand(0,100);
	$randPhrase = rand(0,100);

	if($result[0]['action_id'] == 2)
	{
		if( $rand < 4 )
		{
			$player = $players[1];
		}
		elseif( $rand < 8 )
		{
			$player = $players[2];
		}
		elseif( $rand < 23 )
		{
			$player = $players[3];
		}
		elseif( $rand < 41 )
		{
			$player = $players[4];
		}
		else
		{
			$player = $players[5];
		}

		if( $randPhrase < 16 )
		{
			$extr = "smashed it into the back of the net!";
		}
		elseif( $randPhrase < 36 )
		{
			$extr = "scored a fantastic header.";
		}
		elseif( $randPhrase < 56 ) 
		{
			$extr = "curled it into the far corner!";
		}
		elseif( $randPhrase < 61 )
		{
			$extr = "chiped the goalkeeper!";
		}
		elseif( $randPhrase < 96 )
		{
			$extr = "scored it!";
		}
		else
		{
			$extr = "scored amazing long shot!!!";
		}

		$comment = "Goal for ".$name.". ".$player." ".$extr;
	}
	elseif($result[0]['action_id'] == 4)
	{
		if( $rand < 6 )
		{
			$player = $players[1];
		}
		elseif( $rand < 11 )
		{
			$player = $players[2];
		}
		elseif( $rand < 31 )
		{
			$player = $players[3];
		}
		elseif( $rand < 61 )
		{
			$player = $players[4];
		}
		else
		{
			$player = $players[5];
		}

		$gk = $opPlayers[0];

		if( $randPhrase < 21 )
		{
			$extr = " saved ".$player."’s shot.";
		}
		elseif( $randPhrase < 41 )
		{
			$extr = " parried ".$player."’s shot.";
		}
		elseif( $randPhrase < 61 )
		{
			$extr = " with a wonderful save!";
		}
		elseif( $randPhrase < 61 )
		{
			$extr = " caught the ball in the air.";
		}
		elseif( $randPhrase < 81 )
		{
			$extr = " rose to the occasion!";
		}
		elseif( $randPhrase < 89 )
		{
			$extr = " with an important intervention!";
		}
		else
		{
			$extr = " finger tipped the ball over the bar!!!";
		}

		$comment = $gk.$extr;
	}
	elseif($result[0]['action_id'] == 3)
	{
		if( $rand < 6 )
		{
			$player = $players[1];
		}
		elseif( $rand < 11 )
		{
			$player = $players[2];
		}
		elseif( $rand < 31 )
		{
			$player = $players[3];
		}
		elseif( $rand < 61 )
		{
			$player = $players[4];
		}
		else
		{
			$player = $players[5];
		}

		if( $randPhrase < 36 )
		{
			$extr = " missed the target.";
		}
		elseif( $randPhrase < 51 )
		{
			$extr = " sent the ball into the clouds...";
		}
		elseif( $randPhrase < 61 )
		{
			$extr = " was unlucky, that should have been in.";
		}
		elseif( $randPhrase < 91)
		{
			$extr = " with a decent effort, but just an out.";
		}
		else
		{
			$extr = " hit the bar!";
		}

		$comment = $player.$extr;
	}
	elseif($result[0]['action_id'] == 5)
	{
		if( $rand < 4 )
		{
			$player1 = $players[1];
		}
		elseif( $rand < 9 )
		{
			$player1 = $players[2];
		}
		elseif( $rand < 31 )
		{
			$player1 = $players[3];
		}
		elseif( $rand < 56 )
		{
			$player1 = $players[4];
		}
		else
		{
			$player1 = $players[5];
		}

		if( $randB < 31 )
		{
			$player2 = $opPlayers[1];
		}
		elseif( $randB < 61 )
		{
			$player2 = $opPlayers[2];
		}
		elseif( $randB < 81 )
		{
			$player2 = $opPlayers[3];
		}
		elseif( $randB < 94 )
		{
			$player2 = $opPlayers[4];
		}
		else
		{
			$player2 = $opPlayers[5];
		}
		
		if( $randPhrase < 36 )
		{
			$extr = " tackled ".$player1.".";
		}
		elseif( $randPhrase < 51 )
		{
			$extr = " blocked ".$player1."’s shot.";
		}
		elseif( $randPhrase < 61 )
		{
			$extr = " parried ".$player1."’s shot.";
		}
		elseif( $randPhrase < 91)
		{
			$extr = " with an interception.";
		}
		else
		{
			$extr = " made very important tackle!";
		}

		$comment = $player2.$extr;
	}
	elseif($result[0]['action_id'] == 1)
	{
		if( $rand < 4 )
		{
			$player = $players[1];
		}
		elseif( $rand < 8 )
		{
			$player = $players[2];
		}
		elseif( $rand < 45 )
		{
			$player = $players[3];
		}
		elseif( $rand < 76 )
		{
			$player = $players[4];
		}
		else
		{
			$player = $players[5];
		}

		if( $randPhrase < 11 )
		{
			$extr = $player." was caught offside.";
		}
		elseif( $randPhrase < 31 )
		{
			$extr = $player."’s pass was cut out...";
		}
		elseif( $randPhrase < 51 ) 
		{
			$extr = $player." lost the ball in the middle of the pitch.";
		}
		elseif( $randPhrase < 71 ) 
		{
			$extr = $player." gave the ball to the opposition.";
		}
		elseif( $randPhrase < 91 ) 
		{
			$extr = $player." lost position.";
		}
		else
		{
			$extr = $player." couldn’t diliver the ball into the box.";
		}

		$comment = $extr;
	}
	else
	{
		$comment = "The ball is spinning around...";
	}

	echo $comment;
?>