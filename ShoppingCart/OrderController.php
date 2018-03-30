<?php

function getval($val){
    if(isset($_POST[$val])){ 
        if(empty($_POST[$val])){
            $errors2[]="must enter"+$val;
            return "";}
        else{
            return $_POST[$val]; }
    } return "";
}

$name=getval('name');
$address=getval('address');
$city=getval('city');
$state=getval('state');
$zip=getval('zip');
$phone=getval('phone');
$email=getval('e-mail');
$ccnum=getval('creditnum');
$exp=getval('date');
$sec=getval('code');



if(isset($_POST['contact'])){
    if(empty($_POST['contact'])){
        $errors2[]="must select a contact box ";}
        else{
    $contact=$_POST['contact'];
}
}

if(isset($_POST['submit'])){
     header('Location: PurimHome.html');
}

include 'OrderModel.php';

include 'PurimOrder.php';
?>