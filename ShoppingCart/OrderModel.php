<?php
include 'db.php';
   try{ 
if(empty($errors2)){
$insert="INSERT INTO label_order(name,address,city,state,zip,phone_number,e_mail,cc_num,expiration,security,contact) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
$statement = $db->prepare($insert);
$statement->bindParam(1, $name);
$statement->bindParam(2, $address);
$statement->bindParam(3, $city);
$statement->bindParam(4, $state);
$statement->bindParam(5, $zip);
$statement->bindParam(6, $phone);
$statement->bindParam(7, $email);
$statement->bindParam(8, $ccnum);
$statement->bindParam(9, $exp);
$statement->bindParam(10, $sec);
$statement->bindParam(11, $contact);
$statement->execute();
}
//once order is submitted , the labels table is updated to show submitted= YES
if(!empty($email)){
        $update= "UPDATE labels SET Submitted ='YES' WHERE CustomerID=:email";
        $statement = $db->prepare($update);
        $statement->bindValue('email', $email);
        $statement->execute(); 
}

  } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
     


    
?>