<?php

$quantity=0;
$color="";
$shape="";
$text="";
$src="";
$email="";
$sub="NO";

if(isset($_GET['t'])){
    $t=$_GET['t'];
} else{
    $t="label";
}
session_start();
if(!empty($_SESSION['id'])){
$email=$_SESSION['id'];
}



 
if(isset($_POST['color'])){
    if(empty($_POST['color'])){
        $errors[]="must select color";
    }else{
    $color=$_POST['color'];
}
}

if(isset($_POST['text'])){
    if(empty($_POST['text'])){
        $errors[]="must select text";}
        else{
    $text=$_POST['text'];
}
}
if(isset($_POST['quantity'])){
    if(empty($_POST['quantity'])){
        $errors[]="must select quantity";}
        else{
    $quantity=$_POST['quantity'];
}
}


$src=$_GET['src'];
switch($t){
    case 'label':
        include 'PurimLabelModel.php';
        include 'PurimLabelView.php';
        exit;
    case'tag':
        include 'PurimLabelModel.php';
        include 'PurimTagsView.php';
        exit;
    default:
        echo "not a valid choice";
}


?>