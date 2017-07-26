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
        if(!empty($category)){
         $query .="WHERE category="?" ;   
        }
        $statement = $db->prepare($query);
        if(!empty($category)){
            $statement->bindvalue(1,$category);
        }
        $statement->execute();
        $seforim = $statement->fetchAll();
        $statement->closeCursor();

        

        if(!empty($sefer)){
        $query2 = "SELECT price FROM seforim_price WHERE SeferName=?";
       $statement = $db->prepare($query2);
        $statement->bindValue(1,$sefer );
$statement->execute();  
    $row = $statement->fetch();
        
    }
        

 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>
