<?php


$language=["Java","C++","PHP","JavaScript","MySQL"];
if(empty($_POST['name'])) {$errors[]="Name is a required field";}

if(isset($_POST['Years'])){
    if(! is_numeric($_POST['Years']) || $_POST['Years'] <0 ||$_POST['Years'] >50) 
    { $errors[]="Years Programming must be a number between 0 and 50";
    }
}
else{$errors[]="Years Programming is a required field";
}
if(isset($_POST['Language'])) {
   $favprogl= $_POST['Language'];
if(!in_array($favprogl,$language)) {

    $errors[]="You entered an invalid programming language";
}
}
else {$errors[]="Favorite Programming Language is a required field";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
     li {
         font-size:30px;
         list-style-type:none;
     }
     
     </style>
</head>
<body>
<div class="container">
<div class="jumbotron text-center">
<form class="form-horizontal"  method="post">
            <div class="well text-danger">
                <ul>
                    <?php if (isset($errors)) : ?>
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                     <?php endif ?>
                  <?php  if(empty($errors)){
                       echo " <li>Thanks For Submitting Your Data</li>";
                  } ?>
                </ul>
            </div>
           
<div class="form-group">
    <label  class="col-sm-2" >Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name" name="name" placeholder="name"  >
    </div>
  </div>
   <div class="form-group">
     <label  class="col-sm-2">Years Programming</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="Years"  name="Years" placeholder="Years" >
  </div>
   <div class="form-group">
     <label  class="col-sm-2">Favorite Programming Language</label>
    <div class="col-sm-10">
     
       <select class="form-control" name="Language" value="Programming Language">
           
                         <?php foreach($language as $lang ) : ?>
                         
                         <option value="<?= $lang ?>"
                        
                         ><?= $lang ?>
                         </option>
                         <?php endforeach ?>
                     </select>
  </div>
  <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-default">Submit</button>
                 </div>
             
             
             </form>
    </body>
    </html>