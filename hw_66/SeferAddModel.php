<?php
$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

      

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