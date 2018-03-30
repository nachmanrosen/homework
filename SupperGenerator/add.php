<?php
$id="";
session_start();
$id=$_SESSION['id'];
$name="";
$cs = "mysql:host=localhost;dbname=suppers";
    $user = "seforim";
    $password = '1234';
    
if(isset($_POST['name'])){
        $name=$_POST['name'];
    }
try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query="SELECT ing1,ing2,ing3,ing4,ing5 FROM recipes WHERE name=? ";
        $statement = $db->prepare($query);
        $statement->bindParam(1, $name);
        $statement->execute();
        $recipe = $statement->fetch();
       
        
      if(isset($recipe['ing1'])){
            $insert=" INSERT INTO menu (name, ing1,ing2,ing3,ing4,ing5,person) VALUES(?,?,?,?,?,?,?)";
            $statement=$db->prepare($insert);
            $statement->bindParam(1,$name);
       
            $statement->bindParam(2,$recipe['ing1']);
            $statement->bindParam(3,$recipe['ing2']);
            $statement->bindParam(4,$recipe['ing3']);
            $statement->bindParam(5,$recipe['ing4']);
            $statement->bindParam(6,$recipe['ing5']);
            $statement->bindParam(7,$id);
            $statement->execute();
         }
}catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
}
echo $name;
echo $recipe['name'];
        
 
?>