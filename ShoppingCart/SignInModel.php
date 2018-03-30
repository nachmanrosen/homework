<?php

$cs = "mysql:host=localhost;dbname=purimlabels";
    $user = "seforim";
    $passwordd = '1234';         //not using include db.php because need to have $passwordd
    if(!empty($name)&&!empty($password)){
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $passwordd, $options);
        $query="SELECT password FROM users WHERE CustomerID=?";
        
        $statement = $db->prepare($query);
        $statement->bindValue(1, $name);
        $statement->execute();
        $row=$statement->fetch(PDO::FETCH_COLUMN);     
        
        }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    }
    
    if(!empty($password)&&!empty($row)&&!empty($name)){
        if(password_verify($password,$row)) {     //because of fetch_column don't have to write $row['Password']
           // session_start();
             //$_SESSION['id']=$name;
             header("Location:ShoppingCart.php");
             exit;

          } else {
            echo "<br>"." Wrong Password!";
            header('Location:SignInController.php');
            exit;       
        }
    }

?>