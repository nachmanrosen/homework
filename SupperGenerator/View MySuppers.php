<?php
$id="";
session_start();
$id=$_SESSION['id'];

include 'db.php';
try{
        $query="SELECT name, ing1,ing2,ing3,ing4,ing5,ing6,ing7 FROM menu WHERE person=? ";
        $statement = $db->prepare($query);
        $statement->bindParam(1, $id);
        $statement->execute();
        $suppers = $statement->fetchAll();
        $statement->closeCursor();
}catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>supper form</title>
    <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
h1{
    text-align:center;
}
 </style>
</head>
<body>
    <?php include 'header.html';  ?>
<h1>MY SUPPER MENUS</h1>
<table  class="table table-striped table-hover">
    <tr>
    
        <th>Supper</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th></th>
    </tr>
<?php foreach($suppers as $supper) : ?>
    <tr>

        <td><?php echo $supper['name'];?> </td>
        <td><?php echo $supper['ing1'];?> </td>
        <td><?php echo $supper['ing2'];?> </td>
        <td><?php echo $supper['ing3'];?>  </td>
        <td><?php echo $supper['ing4'];?> </td>
        <td><?php echo $supper['ing5'];?> </td>
        <td><?php echo $supper['ing6'];?> </td>
        <td><?php echo $supper['ing7'];?> </td>
        <td> <button id="<?php echo $supper['name']?>">DELETE</button></td>
    </tr>
<?php  
endforeach ?>
</table>

<script src="/jquery-3.2.1.min.js"></script>
<script>
    $('button').click(function(){
        console.log(this.id);
     $.post("delete.php",{name:this.id},function(){
     }).fail(function (xhr, statusCode, statusText) {
            alert("error: " + statusText);
        });
    });
</script>
</body>
</html>