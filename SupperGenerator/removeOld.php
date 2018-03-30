<?php


    include 'db.php';
    try {
        $query="SELECT person FROM subscribers WHERE person=?";
        
        $statement = $db->prepare($query);
        $statement->bindParam(1, $id);
        $statement->execute();
        $person=$statement->fetch();
       
        
        if(!empty($person)){
        $delete="DELETE FROM subscribers  WHERE person=?";
        $statement = $db->prepare($delete);
        $statement->bindParam(1, $id);
    
        $statement->execute();
        }
        }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    
    


?>