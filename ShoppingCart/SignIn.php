
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
         width:35%;
         font-size:30px;
         font-family:'inherit';
     }
     h1{
       font-size:30px;
       text-align:center;
     }
     
     img{
       width:200px;
       height:100px;
     }
    a{
      display: block;
    margin: 0 auto;

    }
    #a{
      background-color:white;
      width:600px;
      height:650px;
    }
     </style>
</head>

<body>
  <div id="a">
<p style="text-align:center"> <img src="label it new logo-01.jpg"  /></p>
<h1>SIGN IN TO YOUR ACCOUNT</h1>
<div> 
<form action="" method="post">
<div class="form-group">
<label  class="col-sm-4" >e-mail</label>
    <div class="col-sm-6">
      <input type="e-mail"  class="form-control" id="e-mail" name="e-mail" placeholder="" >
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
<label  class="col-sm-4" >password</label>
    <div class="col-sm-6">
      <input type="password"  class="form-control" id="password" name="password" placeholder="" >
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button style="height:75px; width:120px; margin:0 auto;" type="submit" class="btn btn-primary">Sign In</button>
          
        </div>
    </div>
    <br>
    <br>
    <h1>NEW TO LABEL-IT?</h1>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" style="height:75px; width:300px; text-align:center;" value="Create Account" onclick="window.location.href='RegisterController.php'">
          
        </div>
    </div>

    </form>
    </div>
    </html>