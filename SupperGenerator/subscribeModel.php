<?php
$date = date("y.m.d");
$enddate=Date('y:m:d', strtotime("+6 months"));
//$enddate=date_add(myDate,date_interval_create_from_date_string("30 days"));
include 'db.php';
    if(!empty($id)&&!empty($hash)){
    try {
        
        $insert="INSERT INTO subscribers (person,password,startDate,enddate) VALUES (?,?,?,?) ";
        $statement = $db->prepare($insert);
        $statement->bindParam(1, $id);
        $statement->bindParam(2, $hash);

        $statement->bindParam(3, $date);
        $statement->bindParam(4, $enddate);
        $statement->execute();
    }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    }
 
?>