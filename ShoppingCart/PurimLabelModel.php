<?php

include 'db.php';
    try{  
if(empty($errors)&&!empty($quantity)){
$insert="INSERT INTO labels (image,color,text,quantity,CustomerID,submitted,OrderFilled) VALUES(?,?,?,?,?,?,'NO')";
$statement = $db->prepare($insert);

$statement->bindParam(1,$src);
$statement->bindParam(2,$color);

$statement->bindParam(3,$text);
$statement->bindParam(4,$quantity);
$statement->bindParam(5,$email);
$statement->bindParam(6,$sub);
$statement->execute();
//header('Location: ShoppingCart.php');
}
    

  }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

 

    
?>