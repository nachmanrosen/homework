<?php
$name="";
$password="";
$address="";
$city="";
if(!empty($_POST['e-mail'])) {
    $name=$_POST['e-mail'];
}
if(!empty($_POST['password'])) {
    $password=$_POST['password'];
}
if(!empty($_POST['address'])) {
    $address=$_POST['address'];
}
if(!empty($_POST['city'])) {
    $city=$_POST['city'];
}


 include 'signinModel.php';
 include 'signin.php';
 
?>