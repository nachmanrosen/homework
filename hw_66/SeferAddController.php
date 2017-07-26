<?php

 if(isset($_POST['SeferN'])){
    if(empty($_POST['SeferN'])){
        $error="A Sefer must be submitted";
    }
    else{
     $sefer= $_POST['SeferN'];
}
}

if(isset($_POST['PriceI'])){
    if(empty($_POST['PriceI'])){
        $error="A Price must be submitted";
    } 
    else{
     $price= $_POST['PriceI'];
     $priceD=number_format($price,2);
}
}
if(isset($_POST['Category'])){
    if(empty($_POST['Category'])){
        $error="A Category must be submitted";
    } 
    else{
     $category= $_POST['Category'];
   
}
}

include 'SeferAddModel.php';
include 'SeferAddView.php';

?>


