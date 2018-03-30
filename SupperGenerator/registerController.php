<?php
$id="";
    $pass="";
   
   
    if(isset($_POST['e-mail'])){
        $id=$_POST['e-mail'];
    }
     
     if(isset($_POST['password'])){
        $pass=$_POST['password'];
        $hash=password_hash($pass, PASSWORD_DEFAULT);
    }
//include 'removeOld.php';
include 'registerModel.php';
include 'register.php';

?>