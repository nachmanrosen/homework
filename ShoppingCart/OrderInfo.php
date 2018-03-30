<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>table</title>
    <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
    
    <style>
    nav ul{
  list-style: none;
  margin: 0 2px;
  padding: 0;
  display: flex;
  justify-content: space-around;
  background-color:white;
}
     li{ 
display:inline-block;
font-size: 25px;
}
</style>
    </head>
    <body>
    <nav class="topnav">
    <ul>
        <li><a href="tableController.php?id=<?=$_GET['id']?>">ORDERS</a></li>
        <li><a href="ShoppingCart.php?id=<?=$_GET['id']?>">SHOPPING CART </a></li>
        <li><a href="PurimHome.php">HOME </a></li>
    </ul>
        </nav>
    <table class="table table-striped table-hover">
    <tr>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CITY</th>
        <th>STATE</th>
        <th>ZIP</th>
        <th>PHONE NUMBER</th>
        <th>E-MAIL</th>
        <th>CC NUMBER</th>
        <th>EXPIRATION</th>
        <th>SECURITY</th>
        <th>CONTACT</th>
    </tr>
    <?php foreach($INFOS as $INFO) :?>
    <tr>
        <td><?php echo $INFO['name'];?></td>
        <td><?php echo $INFO['address'];?></td>
        <td><?php echo $INFO['city'];?></td>
        <td><?php echo $INFO['state'];?></td>
        <td><?php echo $INFO['zip'];?></td>
        <td><?php echo $INFO['phone_number'];?></td>
        <td><?php echo $INFO['e_mail'];?></td>
        <td><?php echo $INFO['cc_num'];?></td>
        <td><?php echo $INFO['expiration'];?></td>
        <td><?php echo $INFO['security'];?></td>
        <td><?php echo $INFO['contact'];?></td>

    </tr>
    <?php endforeach ?>
    </table>
    </body>
    </html>