<?php

$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query = "SELECT SeferName FROM seforim_price";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();


 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
     body{
         margin:0 auto;
         width:60%;
     }
     
     </style>
</head>

<body>
<h1> Seforim Store</h1>
<div class="jumbotron">
<form   action="Seforim2.php"  method="post">

<label >Choose a Sefer</label>
    
     <select  class="form-group" name="Sefer" id="Sefer">
         <?php
         foreach($seforim as $sefer){
             echo "<option>{$sefer['SeferName']}</option>";
         }
         ?>
     
     </select>

 <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    </div>
</body>
</html>