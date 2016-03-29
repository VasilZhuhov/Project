<?php
$password=$_POST['password'];

    if(strlen($password) == 0)
    {
        $error = 'Its Empty!';
        echo $error;
        exit;
    }

    if(strlen($password) < 4)
    {
        $error = 'Its too short';
        echo $error;
        exit;
    }

    if(strlen($password) > 15)
    {
        $error = 'Its too long!';
        echo $error;
        exit;
    }

    if(!preg_match('/^(?=.{4})(?!.{21})[^\W_]*[a-z][^\W]*$/i', $password))
    {
        $error ='Nop no stupid simvols ';
        echo $error;
        exit;
    }

    if(!preg_match('/[A-Z]/', $password))
    {
        $error ='Add at least 1 capital letter ';
        echo $error;
        exit; 
    }

    if(!preg_match('/[a-z]/', $password))
    {
        $error ='Add at least 1 small letter ';
        echo $error;
        exit; 
    }
    
    if(!preg_match('/[0-9]/', $password))
    {
        $error ='Add at least 1 number ';
        echo $error;
        exit; 
    }
