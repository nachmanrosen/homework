<?php


//if(isset($_POST['Sefer'])){
    //$seferChoose=$_POST['Sefer'];}
$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query = "SELECT SeferName FROM seforim_price";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();

        if(!empty($_POST['Sefer'])){
        $query2 = "SELECT price FROM seforim_price WHERE SeferName=?";
       $results = $db->prepare($query2);
        $results->bindValue(1,$_POST['Sefer'] );
$results->execute();  
    $row = $results->fetch();
        
    }
        

 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>
