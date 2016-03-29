<?php
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
if(strlen($password_2) == 0)
{
    $error = 'Its Empty!';
    echo $error;
    exit;
}
if(strcmp($password_1, $password_2) != 0)
    {
        $error = 'Its not like the password';
        echo $error;
        exit;
    }
