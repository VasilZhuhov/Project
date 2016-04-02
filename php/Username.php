<?php 
	$data = $_POST['data'];
	$error = 'Correct!';
	require_once("db.class.php");

	if(strlen($data) == 0)
	{
		$error = 'Its Empty!';
		echo $error;
		exit;
	}

	if(strlen($data) < 4)
	{
		$error = 'Too short!';
		echo $error;
		exit;
	}

	if(strlen($data) > 20)
	{
		$error = 'Pls add more no problem (yes there is a problem)';
		echo $error;
		exit;
	}
	if($data=="vaseto")
	{
		$error ='The God is the only one';
		echo $error;
		exit;
	}
	if(!preg_match('/^(?=.{4})(?!.{21})[^\W]*[a-z][^\W]*$/i', $data))
	{
		$error ='Nop no stupid simvols ';
		echo $error;
		exit;
	}
	

	
	$query = "SELECT * FROM `users` WHERE `username_sign` = '".$data."'";
	$result = $db->fetchArray($query);
	
	if(count($result)>0)
	{
		$error ='This username is already taken';
		echo $error;
		exit;
	}
?>
