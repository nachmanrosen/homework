<?php

$cs = "mysql:host=localhost;dbname=suppers";
    $user = "seforim";
    $passwordd = '1234';         //not using include db.php because need to have $passwordd, password is used in select statement
    if(!empty($name)&&!empty($password)){
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $passwordd, $options);
        $query="SELECT enddate, password,blocked FROM subscribers WHERE person=?";
        
        $statement = $db->prepare($query);
        $statement->bindValue(1, $name);
        $statement->execute();
        $row=$statement->fetch();  


        $insert="INSERT INTO users (name) VALUES (?) ";
        $statement = $db->prepare($insert);
        $statement->bindValue(1, $name);
        $statement->execute();   
        
        }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    }
    



    
if(!empty($password)&&!empty($row)&&!empty($name)){
    if(password_verify($password,$row['password'])) {  
            //check if todays date is less than or equal to customers enddate(from database) and check if customer isn't blocked
            //the date function gets a string, use strotime to convert date string into Unix timestamp, which can be compared numericaly
            if(strtotime(date("y.m.d"))<=strtotime($row['enddate'])&&$row['blocked']==='NO') {
                    //allow to use site. set id for customer to his e-mail address. then we will use his id to get this customer's data from database.
                    session_start();
                    $_SESSION['id']=$name;
                    header('Location:Menu.php');
                    exit;
            }
            else {               //if enddate has pased, customer needs to renew his payment
                header('Location:renew.php');
                exit;
            }

    } else{ ?>
        <script>
        alert("wrong password");
        
        </script> <?php
        //echo "wrong password";       
        
         exit;      
    }
} else{
   
    
}


?>