<?php 
	$data = $_POST['data'];
	$error = 'Correct!';
	require_once("db.class.php");
	if(!preg_match('/^(?=.{4})(?!.{21})[^\W_]*[a-z][^\W_]*$/i', $data))
	{
		$error ='Nop no stupid simvols ';

	}
	if(strlen($data) == 0)
	{
		$error = 'Too shodsadsart!';
	}
	if(strlen($data) < 4)
	{
		$error = 'Too short!';
	}
	if(strlen($data) > 20)
	{
		$error = 'Pls add more no problem (yes there is a problem)';
	}
	
	if($data=="vaseto")
	{
		$error ='The God is the only one';
	}
	$query = "SELECT * FROM `users` WHERE `username_sign` = '".$data."'";
	$result = $db->fetchArray($query);
	if(count($result)>0)
	{
		$error ='This username is already taken';
	}
	echo $error;

	
?>