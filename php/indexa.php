<?php 


require_once "db.class.php";




if(!isset($_SESSION['logged_user']))
{
	header("Location: index.php");
}
else
{
	echo "<pre>";
	print_r($_SESSION);
}	
