<?php
$id="";
$total=0;

session_start();
if(!empty($_SESSION['id'])){
$id=$_SESSION['id'];
}




$cs = "mysql:host=localhost;dbname=purimlabels";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query='SELECT  image,quantity  FROM labels WHERE  CustomerID=? AND Submitted="NO" ';
        $statement = $db->prepare($query);
        $statement->bindvalue(1,$id);
        $statement->execute();
        $labels = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor(); 

        


        }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
img{
    height:75px;
    width:75px;
}
div{
    width:60%;
    margin: 0 auto;
}
td{
    font-size:25px;
}
h1{
    margin-left:180px;
}
 </style>
</head>

<body>
<?php
    include 'header.php';
    ?>

<h1>SHOPPING CART</h1>
 
<br>
<br>
<table class="table table-striped table-hover">
<tr>

    <th>PRODUCT PICTURE</th>
    <th>UNIT PRICE</th>
    <th>QUANTITY</th>
    <th>PRICE</th>
    <th>TOTAL</th>
</tr>

<?php  $i=0;
foreach($labels as $label):

$i++;
 ?>
  <tr>
        <td><img  src="<?php echo $label['image'];?>"   /></td>
        <td>$0.50</td>
        <td><?php echo $label['quantity']; ?> </td>
        <td>$<?php echo $label['quantity']*.5; ?></td> 
        <td>$<?php $total+=$label['quantity']*.5;
        echo $total;?><td>
        <td><form action="" method="post"> <button type="submit" name="sub" id="<?php echo $label['image'];?>"  value="">DELETE</button></form></td>  
       
      
      <script src="/jquery-3.2.1.min.js"></script>
    <script>
    //when user clicks on button send image data to php to delete from database
    $('button').click(function(){
       
     $.post("delete.php",{img:this.id},function(){
     }).fail(function (xhr, statusCode, statusText) {
            alert("error: " + statusText);
        });
    });
</script>
      
      
  </tr>
<?php 
endforeach; 
?>


</table>
<div> <? php session_start(); ?>
 <input type="button"style="width:300px; height:100px" value="Proceed to Checkout" onclick="window.location.href='OrderController.php?id=<?= $_SESSION['id']?>'" />
<input type="button" style="width:300px; height:100px" value="Shop for More Labels" onclick="window.location.href='PurimLabels.php'" />
<input type="button" style="width:300px; height:100px" value="Shop for More Tags" onclick="window.location.href='PurimTags.php'"/>
</div>
</body>
</html>

?>