<?php
$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    $nameD="";
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
       
 if(isset($_POST['nameD'])){
            $nameD=$_POST['nameD'];
     }

        $delete="DELETE  from seforim_price WHERE SeferName =? ";
        $statement = $db->prepare($delete);
$statement->bindValue(1, $nameD);

$statement->execute();

 $query="SELECT SeferName FROM seforim_price";
 $results=$db->query($query);
 $list=$results->fetchAll();
 $results->closeCursor();
    }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

     
    ?>