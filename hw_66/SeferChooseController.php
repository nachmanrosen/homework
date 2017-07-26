<?php

if(!empty($_POST['category']))
{
    $category=$_POST['category'];
}
if(!empty($_POST['Sefer']))
{
    $sefer=$_POST['Sefer'];
}

include 'SeferChooseModel.php';
include 'SeferChooseView.php';



?>