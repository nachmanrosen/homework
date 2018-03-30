<?php
$price=0;
if(isset($_POST['quantityP'])){
  $price=($_POST['quantityP'])*.5;
}
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
 #center{
     margin:0 auto;
     width:60%;      
 }
 
 #a{
    font-size:25px;
 }
 a{
   font-size:25px;
 }
 
 img{
     width:200px;
     height:200px;
 }
 </style>
</head>

<body>
<?php
    include 'header.php';
    ?>
  
  </br>
  <div id=center>
   <?php if( isset($_GET['src'])) { ?>
  <img  id="img"src=<?=$_GET['src']?> />
  
      
   <?php }?>
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
          
  <?php }  }?> 
  <h1 id="a">$0.50 PER LABEL</h1>
   <?php if(!empty($errors)){ ?>
  <div class="alert alert-danger">
            <ul>
                <?php foreach($errors as $error) echo " <li>$error </li>" ?>
            </ul>
        </div>
 
<?php  }  ?> 
        <h1 id="a"> ENTER YOUR PREFERED COLOR, TEXT, AND QUANTITY</h1>
<form class="form-horizontal"  action=""  method="post">
<div class="form-group">
    <label  class="col-sm-2" >Color</label>
    <div class="col-sm-10">
      <select id="color" name="color"  >
        <option></option>
        <option>blue</option>
        <option>black</option>
        <option>green</option>
        <option>red</option>
        <option>teal</option>
        <option>navy</option>
        <option>pink</option>
        <option>hotpink</option>
        <option>orange</option>
        <option>navy</option>
        <option>pink</option>
        <option>orange</option>
        <option>burgundy</option>
        <option>cranberry</option>
        <option>gray</option>
        <option>eggplant</option>
        <option>taupe</option>
        <option>darkgreen</option>
        <option>gold</option>
         <option>greenapple</option>
    </select>
    </div>
    <br>
    <br>
    <button id="change"> Change Color</button>
    <script src="changecolors.js"/></script>
  </div>
   
    <div class="form-group">
        <label  class="col-sm-2">Enter Text for your Label</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="text"  name="text" value="Simchas Purim" >
    </div>
    </div>
    <div class="form-group">

<label  class="col-sm-2" >Quantity</label> 
     <div class="col-sm-10">
     <select id="quantity" name="quantity">
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
            <button type="submit" class="btn btn-primary" name="submit" id="submit" >Add To Shopping Cart</button>
           
        </div>
    </div>

   
    </form>
     
    </div>
    
    </body>
    </html>