<?php
$email=$_POST['email'];
if(strlen($email) == 0)
    {
        $error ='Its Empty! ';
        echo $error;
        exit;
    }
if(!preg_match('/^(?=.{4})(?!.{21})[^\W]*[a-z][^\W]*$/i', $email))
    {
        $error ='Nop no stupid simvols ';
        echo $error;
        exit;
    }