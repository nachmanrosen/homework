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
        <li><a href="TableOrderController.php?id=<?=$_GET['id']?>">CUSTOMER INFO</a></li>
        <li><a href="ShoppingCart.php?id=<?=$_GET['id']?>">SHOPPING CART </a></li>
        <li><a href="PurimHome.php">HOME </a></li>
        </ul>
        </nav>
    <table class="table table-striped table-hover">
    <tr>
        <th>CUSTOMER</th>
        <th>IMAGE</th>
        <th>COLOR</th>
        <th>TEXT</th>
        <th>QUANTITY</th>
        <th>SUBMITTED<th>
        <th>ORDER FILLED</th>
    </tr>
    <?php foreach($orders as $order) :?>
    <tr>
        <td><?php echo $order['CustomerID'];?></td>
        <td><?php echo $order['image'];?></td>
        <td><?php echo $order['color'];?></td>
        <td><?php echo $order['text'];?></td>
        <td><?php echo $order['quantity'];?></td>
        <td><?php echo $order['submitted'];?></td>
        <td><?php echo $order['OrderFilled'];?></td>
    </tr>
    <?php endforeach ?>
    </table>
    </body>
    </html>