<?php 

	require_once('../db.class.php');

	$i = $_POST['i'] + 1;
	$match_id = $_POST['match_id'];

	$query = "SELECT * FROM minutes WHERE match_id = $match_id AND minute = $i";
	$result = $db->fetchArray($query);

	if(count($result) == 0)
	{
		echo 90;
		exit;
	}

	echo $result[0]['minute'];
?>
