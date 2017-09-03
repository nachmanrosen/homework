<?php
class Cart {
    public function __construct() {
        session_start();
        
        if(empty($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }
    public function addItem($item, $quantity) {
        if(!empty($_SESSION['cart'][$item])) {
            $quantity += $_SESSION['cart'][$item];
        }
        $_SESSION['cart'][$item] = $quantity;
    }
    public function getItems() {
        return $_SESSION['cart'];
    }
}
$cart = new Cart();
if(!empty($_POST['item'])&&(!empty($_POST['quantity']))){
$cart->AddItem($_POST['item'],$_POST['quantity']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
 a
 {margin: 0 auto;
 }
 </style>
 </head>
 <body>

<h1>Select the Item you would like to purchase</h1>
  </br>
<form class="form-horizontal"  action=""  method="post">
<div class="form-group">
<label  class="col-sm-2" >Item</label>

<select class="col-sm-2" class="form-group" name="item" id="item">
     <option>Apple Juice</option>
     <option>Orange Juice</option>
      <option>Challah</option>
      <option>Grape Juice</option>
       <option>Whole Wheat Bread</option>
        <option>Bran Flakes</option>
 </select>   
  </div>
   <div class="form-group">
     <label  class="col-sm-2" >Quantity</label> 
     <div class="col-sm-4">
    <input type="number" class="form-control" id="quantity" min="1" name="quantity" >
</div>
  </div>
   
  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Order</button>
        </div>
    </div>
    </form>
    <a href="ViewCart.php">Shopping Cart</a>
  </body>
  </html>