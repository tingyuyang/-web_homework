<?php
session_start();//super important



$name=$_POST["name"];
$password=$_POST["password"];

$users=file("users.txt", FILE_IGNORE_NEW_LINES);

foreach($users as $user){
    
    $parts=explode(":", $user);
    
    $u=array_shift($parts);
    $p=implode(":", $parts);
   
    if($name==$u){
        
        if ($password==$p){
            
            header("Location: todolist.php");
            
            echo "it's a match";
           
            
        }
        else {
            
            $_SESSION["error"]="Password Incorrect";
            
            header("Location: start.php");
           
        
        }
    } else if (preg_match("/^[a-z]{1}\w{2,7}$/",$name) && preg_match("/^[1-9]{1}\w{4,10}\W{1}$/",$password)){
        $userpw= "\n" . $name . ":" . $password;
        file_put_contents('users.txt', $userpw, FILE_APPEND);
    }
    
}

var_dump($users);



?>