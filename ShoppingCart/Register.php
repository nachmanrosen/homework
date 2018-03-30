<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 
 
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>

   body {
            background-image: url("home page background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
     
         margin:0 auto;
         width:50%;
         font-size:30px;
     }
     h1{
       font-size:75px;
     }
     
     
     </style>
</head>

<body>
<h1>Label-It</h1>
<h1>Create New Account</h1>
<div id=form> 
<form action="" method="post">
<div class="form-group">
<label  class="col-sm-2" >e-mail</label>
    <div class="col-sm-6">
      <input type="email"  class="form-control" id="email" name="email" placeholder="" >
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
<label  class="col-sm-2" >password</label>
    <div class="col-sm-6">
      <input type="password"  class="form-control" id="password" name="password" placeholder="" >
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button style="height:75px; width:120px;" type="submit" class="btn btn-primary">Register</button>
          
        </div>
    </div>
    </form>
    <h1>Already Registered- Sign In</h1>
    <input type="button"style="width:200px; height:75px" value="SIGN IN" onclick="window.location.href='SignInController.php'" />
    </html>