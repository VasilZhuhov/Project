<?php

	require_once "db.class.php";

	echo "<pre>";
	print_r($_POST);

	$data = $_POST;
	$files = $_FILES;
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$media_path = dirname(dirname($actual_link)) . "/media/";

	foreach($data as $k=>$v)
	{
		$data[$k] = trim($data[$k]);
	}
	
	$hasError = 0;
	
	
	$query = "SELECT * FROM `users` WHERE `username_sign` = '".$data['username_sign']."' ";
	
	$result = $db->fetchArray($query);
	
	if(!empty($result))
	{
		$hasError = 1;	
	}	
	if(strlen($data['username_sign']) < 4)
	{
		$hasError = 1;
	}
	
	if(strlen($data['password_sign']) < 4)
	{
		$hasError = 1;
	}
	
	if($data['password_sign'] != $data['password_2'])
	{
		$hasError = 1;
	}

	$target_dir = dirname(dirname(__FILE__)) . "\media\\";
	$file_name = $files["image"]["name"];
	$target_file = $target_dir . basename($file_name);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($files["image"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, but file exist!";
		$hasError = 1;
	}
	// Check file size
	if ($files["image"]["size"] > 5000000) {
		echo "Sorry, but the file is too big";
		$hasError = 1;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$hasError = 1;	
	}
	// Check if $uploadOk is set to 0 by an error
	if ($hasError == 1) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($files["image"]["tmp_name"], $target_file)) {
	        echo "The file ". basename($file_name). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	if($hasError == 0)
	{
		unset($data['password_2']);
		$data['password_sign'] = md5($data['password_sign']);
		$data['avatar'] = $media_path . $file_name;
		$db->saveArray('users', $data);
		header('Location: ../index.php');
	}
	else
	{
		echo "we have an error";
	}

?>