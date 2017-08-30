
<?php if(empty($_COOKIE['last'])){   
$text="You Have Never Been Here Before";

 }
else{ 
$last=$_COOKIE['last'];
     $text="Welcome Back! Last Time You Where Here was :". $last;
}
$date=date('m/d/Y h:i:s: a', time());
//echo $date;
 SetCookie('last',$date, time()+(600*600));
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 </head>
 <body>
<h1><?=$text ?> </h1>
 </body>
 
 </html>