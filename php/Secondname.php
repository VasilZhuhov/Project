<?php
$second_name=$_POST['second_name'];

if(strlen($second_name) == 0)
    {
        $error ='Its Empty! ';
        echo $error;
        exit;
    }
    
    if(strlen($second_name) > 20)
    {
        $error = 'Its too long name';
        echo $error;
        exit;
    }

    if(strlen($second_name) < 2)
    {
        $error = 'Its too short name';
        echo $error;
        exit;
    }
    if(!preg_match('/^(?=.{2})(?!.{21})[^\W]*[a-z][^\W]*$/i', $second_name))
    {
        $error ='Nop no stupid simvols ';
        echo $error;
        exit;
    }
    if(preg_match('/[0-9]/', $second_name))
    {
        $error ='No numbers ';
        echo $error;
        exit; 
    }
  
