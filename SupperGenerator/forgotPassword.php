<?php 
if(isset($_POST['submit'])){
    $to = "nachmanrosen@gmail.com"; // this is your Email address
    $from = $_POST['e-mail']; // this is the sender's Email address
    $subject = "forgot password";
    $subject2 = "forgot password request";
    $message =$from. "forgot his password. Register him again with a new password. Send him his new password";
    $message2 = "We recieved your request for a new password. We will send you a new password within the next 24 hours";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 </head>
 <style>
     p{
         display:block;
     }
     </style>
 <body>
<h1>Forgot Your Password?</h1>
<p>Reset Your Password</p>
<p>Fill Out The Form Below</p>
<form action="" method="post">

    <div class="form-group">
        <label  class="col-sm-4" >e-mail address</label>
        <div class="col-sm-8">
            <input type="e-mail"  class="form-control" id="e-mail" name="e-mail" placeholder="" >
        </div>
    </div>
    <p>if your e-mail address is registered at supper generator, we will send you a new password by e-mail.</p>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button style="height:75px; width:150px;" type="submit" id="submit" name="submit" class="btn btn-primary">Submit Request</button>
         </div>
    </div> 
</form>
 </body>
 </html>