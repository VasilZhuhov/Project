<?php
$email=$_POST['email'];
if(strlen($email) == 0)
    {
        $error ='Its Empty! ';
        echo $error;
        exit;
    }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
  $error = "Its not real email"; 
  echo $error;
  exit;
}