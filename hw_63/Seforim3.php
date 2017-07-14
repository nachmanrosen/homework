<?php
$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

       if(isset($_POST['SeferN'])){
    if(empty($_POST['SeferN'])){
        die("A Sefer must be submitted");
    }
    else{
     $sefer= $_POST['SeferN'];
}
}

if(isset($_POST['PriceI'])){
    if(empty($_POST['PriceI'])){
        die("A Price must be submitted");
    } 
    else{
     $price= $_POST['PriceI'];
     $priceD=number_format($price,2);
}
}

$insert="INSERT INTO seforim_price (SeferName, Price) VALUES(?,?)";
$statement = $db->prepare($insert);
$statement->bindParam(1, $sefer);
$statement->bindParam(2, $priceD);
$statement->execute();


    }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
  <h1>Enter a Sefer and its Price to add to our Store's database</h1>
  </br>
<form class="form-horizontal"  action=""  method="post">
<div class="form-group">
<label  class="col-sm-2" >Sefer Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="SeferN" name="SeferN" placeholder="Sefer Name"  >
    </div>
  </div>
   <div class="form-group">
     <label  class="col-sm-2" >Price</label> 
     <div class="col-sm-10">
    <input type="double" class="form-control" id="PriceI" name="PriceI" placeholder="Price" >
    
  </div>
  </div>
  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    </body>
    </html>