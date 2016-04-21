<?php 
	$data = $_POST['data'];
	$error = 'Correct!';
	require_once("db.class.php");

		
	$query = "SELECT * FROM `users` WHERE `username_sign` = '".$data."'";
	$result = $db->fetchArray($query);
	
	if(count($result) > 0)
	{
		$error ='Exist';
		echo $error;
		exit;
	}




?>
