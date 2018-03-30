<?php
session_start();
$_SESSION['start']='yes';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
    .col-sm-4, .col-sm-10{
      padding-right:0px;
    padding-left:0px;
    }
   
    body{
     background-color:lightblue;
    }
    form, header{
        color:black;
        margin-left:300px;
     }
    h1,h2,form{
     font-size:30px;
    }
    p{
        font-size:15px;
    }
    #div{
     padding-top:50px;
     margin-left:300px;
    }
    img{
     width:200px;
     height:200px;
    }
    #P{
      padding:20 px;
     padding-left:0px;
      margin:0 auto;
      display:inline-block;
      position:relative; 
        top :20px;
    }
    #un{
     width:60px;
     height:60px;
    }
    #b{ 
    
        height:50px; 
        width:150px;
        @media screen and (max-width 1399px){
        position:relative; 
        right:400 px;
    }
     @media screen and (min-width 1400px){
         position:relative;
         right:700px;
    }
        }
        #logo{height:300px;
        width:300px;
        }
</style>
 </head>
 <body>
 
 <header>
    <img src="images/supper gen logo.png" id="logo">
    <h1>Simplify your supper planning</h1>
    <p>Enter your favorite suppers and ingredients, then the program will choose 1-10 suppers for you and display a printable menu and shopping list</p>
    <input type="button"style="width:150px; height:50px;" class="btn btn-primary" value="Demo Pictures" onclick="window.location.href='demo.php'" > 
    <input type="button"style="width:150px; height:50px;" class="btn btn-primary" value="Halacha Corner" onclick="window.location.href='kashrus.html'" > 
 </header>
 <form action="" method="post">
    <h1>Sign in to your account</h1>

    <div class="form-group">
        <label  class="col-sm-4" >e-mail</label>
        <div class="col-sm-6">
            <input type="email"  class="form-control" id="e-mail" name="e-mail" placeholder="" >
        </div>
    </div>
    <br>
    <div class="form-group">
        <label  class="col-sm-4" >password</label>
        <div class="col-sm-6">
            <input type="password"  class="form-control" id="password" name="password" placeholder="" >
        </div>
    </div>
    
    <div class="form-group">
        <div class=" col-sm-10">
 <button id="b"  type="submit" class="btn btn-primary">Sign In</button>
</div>
</div>
    <br>
    <br>
    <div id="msg">
    </div>
    <div id="P">
        <img src="images/o.jpg">
        <img src="images/th (1).jpg">  
        <img src="images/calzone.jpg">  
        <img src="images/th.jpg">
    </div>
</form> 
    <div id="div">
        <h2>New to Supper Generator? </h2>
        <h2>Free Trial for 30 Days! </h2>
        <input type="button"style="width:150px; height:50px;" class="btn btn-primary" value="Sign Up" onclick="window.location.href='registerController.php'" > 
        
        <br>
        <h2>Subscribe for 3 months for $5 a month!</h2>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="4S3KDTQSQ88JW">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
       
      <br>
    </div>
    <footer>
        <p>For questions and comments please e-mail suppergenerator@gmail.com</p>
    </footer>
</body>
</html>














