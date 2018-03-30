<?php
include 'db.php';
try{
        $query="SELECT image,color,text,quantity,CustomerID,submitted,OrderFilled from labels";
        $statement = $db->prepare($query);
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement->closeCursor();

 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>