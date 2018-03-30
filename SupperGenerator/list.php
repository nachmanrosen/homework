<?php 
$suppers;
if (isset($_GET['sup'])){
$suppers=$_GET['sup'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>supper form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
h1{
    text-align:center;
}
 </style>
 </head>
<body>
    <?php include 'HEADE.html';  ?>

<h1>INGREDIENTS FOR THIS WEEK</h1>
<?php foreach($suppers as $supper){ ?>
    <ul>
   <?php foreach($supper as $ing) {  ?>
    <li> <?php echo $ing; ?> <li>
   
    <?php
}  ?>
</ul>   <?php
}
?>
?>