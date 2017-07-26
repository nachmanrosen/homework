<?php

$seferChoose="";
if(isset($_POST['Sefer'])){
    if(empty($_POST['Sefer'])){
        die("A Sefer must be submitted");
    }
    else{
         $seferChoose=$_POST['Sefer'];
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
     body{
         margin:0 auto;
         width:60%;
         
     }
     
     </style>
</head>

<body>
<h1> Seforim Store</h1>
<form method="post">
    <div class="jumbotron">
    <label > Choose a Category of Seforim</label>
    
     <select  class="form-group" name="category" id="category">
    <option>Gemaras</option>
     <option>Rishonim</option>
      <option>Achronim</option>
 </select>
 <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    </div>
<div class="jumbotron">
<form     method="post">

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
    
            <div class="jumbotron">
                <div class="well col-sm-2 text-right">Sefer Selected </div>
                <div class="col-sm-10 well"><?= $seferChoose ?></div>
            </div>
            </br>
            </br>
            <div>
                <div class="well col-sm-2 text-right">Price </div>
              <?php   if (isset($row['price'])) {  ?>
                <div class="col-sm-10 well"><?=$row['price'] ?></div>
                 <?php } ?>
            </div>
          <?php  if(!empty($error)){ ?>
                <div class="well col-sm-2 text-right">Error </div>
                <div class="col-sm-10 well"><?= $error ?></div>
            <?php } ?>
            
            </div>
            </body>
            </html>

