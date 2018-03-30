<?php 
$tags=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
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
    font-family: 'inherit';
          
}
h1{
    font-size: 30px;
    text-align:center;
}
img {
    height: 200px;
    width:120px;
}
div {height:250px;
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

<h1> CHOOSE A TAG</h1>
<?php foreach($tags as $tag) :  ?>
<div>
<img src="TAGs/T<?=$tag?>.jpg"onclick="window.location.href='PurimLabelController.php? src=TAGS/T<?=$tag?>.jpg&&t=tag'"/>

</div>
<?php endforeach ?>
</body>
</html>