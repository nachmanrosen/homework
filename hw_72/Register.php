<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
if(isset($_POST['password'])){
    $password=$_POST['password'];
    echo $password;
    $hash=password_hash($password, PASSWORD_DEFAULT);
    
}
$cs = "mysql:host=localhost;dbname=test";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $insert="INSERT INTO password (UserName,Password) VALUES (?,?) ";
$statement = $db->prepare($insert);
$statement->bindParam(1, $name);
$statement->bindParam(2, $hash);
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
<h1>Register</h1>
<form  action="" method="post">
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
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
  </form>
  <a href="Login.php"> Log In </a>
  </body>
  </html>