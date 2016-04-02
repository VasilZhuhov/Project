<?php

$data = $_POST;
$result = array(
    "color"=> "#2EE619",
    "text"=> "Correct!",
    "status"=> 0 
);
if($data["name"] == "username_sign"){
    $result = usernameValidation($data["value"], $result);
}
elseif(strpos($data["name"], "password") !== false){
    $result = passwordValidation($data["value"][0], $data["value"][1], $data["name"], $result);
}
elseif ($data["name"] == "email") {
    $result = emailValidation($data["value"], $result);
}
elseif ($data["name"] == "first_name"){
    $result = firstnameValidation($data["value"], $result);
}
elseif ($data["name"] == "second_name") {
    $result = secondnameValidation($data["value"], $result);
}


if($result["text"] != "Correct!"){
    $result["color"] = "#F71111";
    $result["status"] = 1;
}
echo json_encode($result);


function usernameValidation($data, $result){

    require_once("db.class.php");

    if(strlen($data) == 0)
    {
        $result["text"] = 'Its Empty!';
    }
    elseif(strlen($data) < 4)
    {
        $result["text"] = 'Too short!';
    }
    elseif(strlen($data) > 20)
    {
        $result["text"] = 'Pls add more no problem (yes there is a problem)';
    }
    elseif($data=="vaseto")
    {
        $result["text"] ='The God is the only one';
    }
    elseif(!preg_match('/^(?=.{4})(?!.{21})[^\W]*[a-z][^\W]*$/i', $data))
    {
        $result["text"] ='Nop no stupid simvols ';
    }   
    else
    {
        $query = "SELECT * FROM `users` WHERE `username_sign` = '".$data."'";
        $result_ = $db->fetchArray($query);
        if(count($result_)>0){
            $result["text"] ='This username is already taken';
        }
    }
    return $result;
}

function passwordValidation($password_1, $password_2, $name, $result){
    if(strlen($password_1) == 0)
    {
        $result["text"] = 'Its Empty!';
    }

    elseif(strlen($password_1) < 4)
    {
        $result["text"] = 'Its too short';
    }

    elseif(strlen($password_1) > 15)
    {
        $result["text"] = 'Its too long!';
    }

    elseif(!preg_match('/^(?=.{4})(?!.{21})[^\W_]*[a-z][^\W]*$/i', $password_1))
    {
        $result["text"] ='Nop no stupid simvols ';
    }

    elseif(!preg_match('/[A-Z]/', $password_1))
    {
        $result["text"] ='Add at least 1 capital letter ';
    }

    elseif(!preg_match('/[a-z]/', $password_1))
    {
        $result["text"] ='Add at least 1 small letter '; 
    }
    
    elseif(!preg_match('/[0-9]/', $password_1))
    {
        $result["text"] = 'Add at least 1 number ';
    }
    elseif(strlen($password_2) == 0 && $name == "password_2")
    {
        $result["text"] = 'Its Empty!';
    }
    elseif(strcmp($password_1, $password_2) != 0 && $name == "password_2")
    {
        $result["text"] = 'Its not like the password';
    }

    return $result;
}

function emailValidation($data, $result){
    if(strlen($data) == 0)
    {
        $result["text"] = 'Its Empty!';
    }
    elseif (!filter_var($data, FILTER_VALIDATE_EMAIL)) 
    {
      $result["text"]='Its not real email';
    }

    return $result;
}

function firstnameValidation($data, $result){

    if(strlen($data) == 0)
    {
        $result["text"] ='Its Empty! ';        
    }
    elseif(!preg_match('/^(?=.{0})(?!.{21})[^\W]*[a-z][^\W]*$/i', $data))
    {
        $result["text"] ='Nop no stupid simvols ';
        
    }
    
    elseif(strlen($data) > 20)
    {
        $result["text"] = 'Its too long name';       
    }

    elseif(strlen($data) < 2)
    {
        $result["text"] = 'Its too short name';  
    }

    elseif(preg_match('/[0-9]/', $data))
    {
        $result["text"] ='No numbers ';
    }
    
    return $result;  
}

function secondnameValidation($data, $result){
     
    if(strlen($data) == 0)
    {
       $result["text"]  ='Its Empty! ';
    }
    elseif(!preg_match('/^(?=.{0})(?!.{21})[^\W]*[a-z][^\W]*$/i', $data))
    {
        $result["text"] ='Nop no stupid simvols ';
    }
    
    elseif(strlen($data) > 20)
    {
        $result["text"] = 'Its too long name';
    }

    elseif(strlen($data) < 2)
    {
        $result["text"] = 'Its too short name';
    }
   
    elseif(preg_match('/[0-9]/', $data))
    {
        $result["text"] ='No numbers ';
    }
     return $result;
}

function passwordMatch($data, $result ){
    if(($data=="password_sign") != ($data=="password_2") )
    {
        $result["text"] = 'Wrong';
    }
    return $result;
}

?>