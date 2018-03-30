<?php

$cs = "mysql:host=localhost;dbname=purimlabels";
    $user = "seforim";
    $password = '1234';
    if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query="SELECT admin from users WHERE CustomerID=?";
        $statement = $db->prepare($query);
        $statement->bindParam(1,$id);

        $statement->execute();
        $admin=$statement->fetch();
        } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
     nav {
top:0px;
right:0px;
left:0px;
height:50px;
}
nav ul{
  list-style: none;
  margin: 0 2px;
  padding: 0;
  display: flex;
  justify-content: space-around;
  background-color:white;
}
     li{ 
display:inline-block;
font-size: 25px;
 font-family: 'inherit';
}
a{
    color:black;
}
</style>
  </head>
  <body>
<nav class="topnav">
    <ul>
        <li><a href="PurimLabels.php">CIRCLE LABELS</a></li>
        <li><a href="Squares.php">SQUARE LABELS </a></li>
        <li><a href="PurimTags.php">TAGS </a></li>
        <li><a href="ShoppingCart.php">SHOPPING CART </a></li>
         <li><a href="PurimHome.php">HOME </a></li>

      <?php
       if(isset($_SESSION['id'])){
        if($admin[0]==='1'){ ?>
         <li><a href="tableController.php">ADMINISTRATOR </a></li>
      <?php }  
      } ?>

    </ul>
    </nav>
