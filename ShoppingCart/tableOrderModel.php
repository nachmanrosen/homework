<?php
include 'db.php';
try{
        $query="SELECT name,address,city,state,zip,phone_number,e_mail,cc_num,expiration,security,contact  from label_order";
        $statement = $db->prepare($query);
        $statement->execute();
        $INFOS = $statement->fetchAll();
        $statement->closeCursor();

 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>