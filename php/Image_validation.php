<?php
$Image_validation=$_POST['Image_validation'];

if(strlen($Image_validation) == 0)
    {
        $error ='Its Empty! ';
        echo $error;
        exit;
    }
    