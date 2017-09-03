<?php
session_start();
$myItems=$_SESSION['cart'];
//print_r($myItems);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 </head>
 <body>
 <h1>Shopping Cart</h1>
 <table>
     <tr>
         <th>Item</th>
         <th>Quantity</th>
         </tr>
 <?php
 foreach($myItems as $key=>$value) {
     echo "<tr>";
     echo  "<td>" .$key."</td>";
     echo "<td>".$value."</td>";
     echo "</tr>";
 }
 ?>
 </table>
 <br>
 <br>
 <a href="shopform.php">Add Items to Cart</a>
 </body>
 </html>


 