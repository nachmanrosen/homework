<? php 

?>
<style>
div{
  text-align:center;
  font-size:10px;
  
}
h1{
  font-size:10px;
}
p{font-size:20px;}
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php include 'header.php';  ?>
<div>
   <p>COMPLETE YOUR ORDER </p> 

   
 <br>
  <br>
 <h1>PLEASE ENTER YOUR ORDER INFORMATION:</h1>  
 <?php if(!empty($errors2)){ ?>
<div class="alert alert-danger">
            <ul>
                <?php foreach($errors2 as $error) echo "<li>$error</li>" ?>
            </ul>
        </div>
<?php  }  ?> 
 
 
<form class="form-horizontal"  action=""  method="post">
<div class="form-group">
<label  class="col-sm-2" >Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name" name="name" placeholder=" Name"  >
    </div>
  </div>
  <div class="form-group">
<label  class="col-sm-2" > Address</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="address" name="address" placeholder="Address"  >
    </div>
  </div>
  <div class="form-group">
<label  class="col-sm-2" >City</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="city" name="city" placeholder="City"  >
    </div>
  </div>
   <div class="form-group">
<label  class="col-sm-2" >State</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="state" name="state" placeholder="State"  >
    </div>
  </div>
  <div class="form-group">
<label  class="col-sm-2" >Zip</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="zip" name="zip" placeholder="zip"  >
    </div>
  </div>
   <div class="form-group">
<label  class="col-sm-2" >Phone Number</label>
    <div class="col-sm-10">
      <input type="tel"  class="form-control" id="phone" name="phone" placeholder="PhoneNumber"  >
    </div>
  </div>
   <div class="form-group">
<label  class="col-sm-2" >E-mail</label>
    <div class="col-sm-10">
      <input type="e-mail"  class="form-control" id="e-mail" name="e-mail" placeholder="E-mail"  >
    </div>
  </div>
  <div class="form-group">
<label  class="col-sm-2" >Credit Card Number</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="creditnum" name="creditnum" placeholder="Credit Card Number"  >
    </div>
  </div>
  <div class="form-group">
<label  class="col-sm-2" >Expiration Date</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control" id="date" name="date" placeholder="Expiration Date" >
    </div>
  </div>
  <div class="form-group">
<label  class="col-sm-2" >Security Code</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="code" name="code" placeholder="Three Digit Code" >
    </div>
  </div>
  <input type="checkbox" name="contact" id="contact" value="Phone"> Contact Me by Phone<br>
  <input type="checkbox" name="contact" id="contact" value="E-mail"> Contact me by E-mail<br> 

   <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit" id="submit"> Place Order</button>
           

        </div>
    </div>
  </form>
  </html>