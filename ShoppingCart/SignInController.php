<?php
$name="";
$password="";
if(!empty($_POST['e-mail'])) {
    $name=$_POST['e-mail'];
    session_start();
    $_SESSION['id']=$name;
}
if(!empty($_POST['password'])) {
    $password=$_POST['password'];
}


 include 'SignInModel.php';
 include 'SignIn.php';
 
?>