<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>label form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
 body{
      font-family: 'inherit';
 }
 #a{
    font-size:25px;
 }
 #b{
     margin:0 auto;
     width:60%;     
 }
 img{
     width:120px;
     height:200px;
 }
 a{
   font-size:25px;
 }
 </style>
</head>

<body>
<?php
    include 'header.php';
    ?>
    <div id="b">
<h2 id="a">$0.50 PER TAG</h2>
  <h2 id="a">ENTER YOUR PREFERED COLOR, TEXT, AND QUANTITY</h2>
  </br>
   <?php if( isset($_GET['src'])) { ?>
  <img src=<?=$_GET['src']?> />
  <?php } ?>
  </br>
  </br>
  <?php if(isset($_POST['submit'])) { 
      //session_start();
  if(isset($_SESSION['id'])){
      header("Location:ShoppingCart.php");
  }
  else{
  ?>
  <input type="button" style="height:75px; width:300px;" value="SIGN IN" onclick="window.location.href='SignInController.php'">
  <?php } } ?>
<form class="form-horizontal"  action=""  method="post">
<div class="form-group">
<label  class="col-sm-2" >Color</label>
    <div class="col-sm-10">
      <select id="color" name="color"   >
      <option></option>
       <option>Blue</option>
       <option>Yellow</option>
       <option>Orange</option>
       <option>Red</option>
       <option>White</option>
       <option>Green</option>
       <option>Pink</option>
    </select>
    </div>
  </div>
  
   
   <div class="form-group">
     <label  class="col-sm-2">Enter Text for your Tag</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="text"  name="text" value="Simchas Purim" >
  </div>
   </div>
<div class="form-group">
     <label  class="col-sm-2" >Quantity</label> 
     <div class="col-sm-10">
     <select id="quantity" name="quantity"  >
      <option></option>
     <option>12</option>
    <option>24</option>
    <option>36</option>
    <option>48</option>
     <option>60</option>
    <option>72</option>
     <option>84</option>
    <option>96</option>
    </select>
  </div>
  </div>
  
  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary"  name="submit" id="submit">Add To Shopping Cart</button>
        </div>
    </div>
    </div>
    </form>
    </body>