<?php

if(!empty($_POST['name'])) {
    $name=$_POST['name'];
}
if(!empty($_POST['password'])) {
    $password=$_POST['password'];
}
$cs = "mysql:host=localhost;dbname=test";
    $user = "seforim";
    $passwordd = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $passwordd, $options);
        $query="SELECT Password FROM password WHERE UserName=?";
        
        $statement = $db->prepare($query);
        $statement->bindValue(1, $name);
        $statement->execute();
        $row=$statement->fetch();
        echo $row['Password'];
        }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    //$hash=password_hash($password, PASSWORD_DEFAULT);
   //echo "<br>";
    //echo $hash;
    echo "<br>";
    echo $password;
if(password_verify($password,$row['Password'])) {
    session_start();
    $_SESSION['log in']="loggedin";
header('Location:shopform.php');
} else {
    echo "<br>"." wrong password!";
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
<h1>Log In</h1>
<form method="post">
<label  class="col-sm-2" >User Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name" name="name"  >
    </div>
  </div>
   <div class="form-group">
<label  class="col-sm-2" >Password</label>
    <div class="col-sm-10">
      <input type="password"  class="form-control" id="password" name="password"  >
    </div>
  </div>
   <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    </div>
  </form>
  </body>
  </html>