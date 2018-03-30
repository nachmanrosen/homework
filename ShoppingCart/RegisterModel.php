<?php

include 'db.php';
    if(!empty($email)&&!empty($hash)){
    try {
        
        
        $insert="INSERT INTO users (CustomerID,password,admin) VALUES (?,?,0) ";
        $statement = $db->prepare($insert);
        $statement->bindParam(1, $email);
        $statement->bindParam(2, $hash);
        $statement->execute();
    }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    }

?>