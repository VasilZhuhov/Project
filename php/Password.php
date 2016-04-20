<?php
$password=$_POST['password'];

    $query = "SELECT * FROM `users` WHERE `password_sign` = '".$data."'";
    $result = $db->fetchArray($query);
    
    if(count($result) > 0)
    {
        $error ='dsadsadas';
        echo $error;
        exit;
    }
