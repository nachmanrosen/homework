<?php
$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

       if(isset($_POST['SeferN'])){
    if(empty($_POST['SeferN'])){
        die("A Sefer must be submitted");
    }
    else{
     $sefer= $_POST['SeferN'];
}
}

if(isset($_POST['PriceI'])){
    if(empty($_POST['PriceI'])){
        die("A Price must be submitted");
    } 
    else{
     $price= $_POST['PriceI'];
     $priceD=number_format($price,2);
}
}

$insert="INSERT INTO seforim_price (SeferName, Price) VALUES(?,?)";
$statement = $db->prepare($insert);
$statement->bindParam(1, $sefer);
$statement->bindParam(2, $priceD);
$statement->execute();

  }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

 

    
?>