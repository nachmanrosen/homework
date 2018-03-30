<?php
$email="";
    $pass="";
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    
    
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
 
// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address. you are registered");
} else {
    echo("$email is not a valid email address");
}
    }

     if(isset($_POST['password'])){
        $pass=$_POST['password'];
        $hash=password_hash($pass, PASSWORD_DEFAULT);
    }
include 'RegisterModel.php';
include 'Register.php';

?>