<?php
$circles=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33]


?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purim Tags</title>
<style>
header{
    text-align:center;
    margin:0 auto;
    font-size: 30px;
    font-family: 'Raleway';
    src: url('/RALEWAYLIGHT.TTF');
          
}
h1{
font-size: 30px;
text-align:center;
}
img {
    height: 180px;
    width:180px;
}
div{
  height:250px;
  width:400px;
  display: inline-block;
  padding: 25px;
}
</style>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
    <?php
    include 'header.php';
    ?>

<h1>CHOOSE A LABEL</h1>
<?php foreach($circles as $circle) :  ?>
<div>
<img src="circles/L<?=$circle?>.jpg" onclick="window.location.href='PurimLabelController.php? src=circles/L<?=$circle?>.jpg&&t=label'"/>
</div>
<?php endforeach ?>

</body>
</html>