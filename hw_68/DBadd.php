<?php
include 'DbS.php';
    
    try{
        $my database=new Database( "mysql:host=localhost;dbname=seforim","seforim",'1234',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $db=$mydatabase->getDb();
    

     

$insert="INSERT INTO seforim_price (SeferName, Price, category) VALUES(?,?,?)";
$statement = $db->prepare($insert);
$statement->bindParam(1, $sefer);
$statement->bindParam(2, $priceD);
$statement->bindParam(3, $category);
$statement->execute();

  }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

 

    
?>