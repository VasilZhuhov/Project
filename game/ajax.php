<?php 

require_once('teams.php'); 

?>
<html>
<head>
	<script type="text/javascript" src="../js/jquery.js"></script>
</head>
<script type="text/javascript">
var i = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/minPHP.php",
			type: "POST",
			data: 
			{
				i: i, 
				match_id: <?php echo $match_id ?>
			},
			success: function(result) 
			{
					document.getElementById('min').innerHTML = result;
					i++;
			}
		});
	}, 2500);

	var g1 = 0;
	var goalTeam1 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team1goalPHP.php",
			type: "POST",
			data: 
			{
				g1: g1, 
				match_id: <?php echo $match_id ?>, 
				goalTeam1: goalTeam1,
				team1id:<?php echo $team1[0]['id'] ?>
			}, 
			success: function(result) 
			{
				goalTeam1 = result;
				document.getElementById('teamgoal1').innerHTML = result;
				g1++;
			}
		});
	}, 2500);

	var g2 = 0;
	var goalTeam2 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team2goalPHP.php",
			type: "POST",
			data: 
			{
				g2: g2, 
				match_id: <?php echo $match_id ?>, 
				goalTeam2: goalTeam2,
				team2id:<?php echo $team2[0]['id'] ?>
			}, 
			success: function(result) 
			{
				goalTeam2 = result;
				document.getElementById('teamgoal2').innerHTML = result;
				g2++;
			}
		});
	}, 2500);

	var s1 = 0;
	var shotsTeam1 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team1shotsPHP.php",
			type: "POST",
			data: 
			{
				s1: s1, 
				match_id: <?php echo $match_id ?>, 
				shotsTeam1: shotsTeam1,
				team1id:<?php echo $team1[0]['id'] ?>
			}, 
			success: function(result) 
			{
				shotsTeam1 = result;
				document.getElementById('shotsT1').innerHTML = result;
				s1++;
			}
		});
	}, 2500);

	var s2 = 0;
	var shotsTeam2 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team2shotsPHP.php",
			type: "POST",
			data: 
			{
				s2: s2, 
				match_id: <?php echo $match_id ?>, 
				shotsTeam2: shotsTeam2,
				team2id:<?php echo $team2[0]['id'] ?>
			}, 
			success: function(result) 
			{
				shotsTeam2 = result;
				document.getElementById('shotsT2').innerHTML = result;
				s2++;
			}
		});
	}, 2500);

	var saves1 = 0;
	var savesTeam1 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team1savesPHP.php",
			type: "POST",
			data: 
			{
				saves1: saves1, 
				match_id: <?php echo $match_id ?>, 
				savesTeam1: savesTeam1,
				team1id:<?php echo $team1[0]['id'] ?>
			}, 
			success: function(result) 
			{
				savesTeam1 = result;
				document.getElementById('savesT2').innerHTML = result;
				saves1++;
			}
		});
	}, 2500);

	var saves2 = 0;
	var savesTeam2 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team2savesPHP.php",
			type: "POST",
			data: 
			{
				saves2: saves2, 
				match_id: <?php echo $match_id ?>, 
				savesTeam2: savesTeam2,
				team2id:<?php echo $team2[0]['id'] ?>
			}, 
			success: function(result) 
			{
				savesTeam2 = result;
				document.getElementById('savesT1').innerHTML = result;
				saves2++;
			}
		});
	}, 2500);

	var m1 = 0;
	var missTeam1 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team1missPHP.php",
			type: "POST",
			data: 
			{
				m1: m1, 
				match_id: <?php echo $match_id ?>, 
				missTeam1: missTeam1,
				team1id:<?php echo $team1[0]['id'] ?>
			}, 
			success: function(result) 
			{
				missTeam1 = result;
				document.getElementById('missT1').innerHTML = result;
				m1++;
			}
		});
	}, 2500);

	var m2 = 0;
	var missTeam2 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team2missPHP.php",
			type: "POST",
			data: 
			{
				m2: m2, 
				match_id: <?php echo $match_id ?>, 
				missTeam2: missTeam2,
				team2id:<?php echo $team2[0]['id'] ?>
			}, 
			success: function(result) 
			{
				missTeam2 = result;
				document.getElementById('missT2').innerHTML = result;
				m2++;
			}
		});
	}, 2500);

	var w1 = 0;
	var wastedTeam1 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team1wastedPHP.php",
			type: "POST",
			data: 
			{
				w1: w1, 
				match_id: <?php echo $match_id ?>, 
				wastedTeam1: wastedTeam1,
				team1id:<?php echo $team1[0]['id'] ?>
			}, 
			success: function(result) 
			{
				wastedTeam1 = result;
				document.getElementById('wastedT1').innerHTML = result;
				w1++;
			}
		});
	}, 2500); 

	var w2 = 0;
	var wastedTeam2 = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/team2wastedPHP.php",
			type: "POST",
			data: 
			{
				w2: w2, 
				match_id: <?php echo $match_id ?>, 
				wastedTeam2: wastedTeam2,
				team2id:<?php echo $team2[0]['id'] ?>
			}, 
			success: function(result) 
			{
				wastedTeam2 = result;
				document.getElementById('wastedT2').innerHTML = result;
				w2++;
			}
		});
	}, 2500);

	var c = 0;
	var comment = 0;
	setInterval(function()
	{
		$.ajax({
			url: "../php/actions/commentPHP.php",
			type: "POST",
			data: 
			{
				c: c, 
				match_id: <?php echo $match_id ?>, 
				comment: comment,
				team1id:<?php echo $team1[0]['id'] ?>,
				team2id:<?php echo $team2[0]['id'] ?>
			}, 
			success: function(result) 
			{
				comment = result;
				document.getElementById('comment').innerHTML = result;
				c++;
			}
		});
	}, 2500);
</script>
<body>
</body>
</html>

