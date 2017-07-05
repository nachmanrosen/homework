
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<style>
nav {
position: fixed;
top:0px;
right:0px;
left:0px;
height:50px;
}
li{ 
display:inline-block;
font-size: 25px;

}
h1{
    font-size: 70px;
    text-align: center;
}

h1, h2, label{
    color:<?=$color?>;
    font-family:<?=$font?>;
}
    </style>
    <?php
    $style="";
    if((!empty($color))&(!empty($font))){
    $style="?Color=".$color."&Font=".$font;}
    ?>
 </head>
 <body>
<nav class="topnav">
    <ul>
        <li><a href="Breakfast.php<?=$style?>" >Breakfast  </a></li>
        <li><a href="Lunch.php<?=$style?>" >Lunch </a></li>
        <li><a href="Supper.php<?=$style?>"  >Supper </a></li>
    </ul>
</nav>
<h1>Today's Menu</h1>
 </body>
 </html>