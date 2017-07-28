<?php
include 'utils/db.php';

if (empty($zip)) {
    $zip = '';
}

if (empty($min)) {
    $min = '';
}

if (empty($max)) {
    $max = '';
}

//if (!empty($_GET['page'])){

//$pagem=$_GET['page'];

//}
try {
    $query = "SELECT * FROM houses WHERE (:zip = '' OR zip=:zip)
                                    AND (:min = '' OR price >= :min)
                                    AND (:max = '' OR price <= :max)
                                    LIMIT 4 ";
 
    
 
    $statement = $db->prepare($query);
    $statement->bindValue('zip', $zip);
    $statement->bindValue('min', $min);
    $statement->bindValue('max', $max);
    if (!empty($_GET['page'])){
 $query.="OFFSET :start ";
        $statement->bindValue('start',$_GET['page'] );
    }
 

    
    $statement->execute();
    $houses = $statement->fetchAll();
    $statement->closeCursor();
} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
?>