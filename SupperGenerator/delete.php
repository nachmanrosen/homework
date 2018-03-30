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
        $delete="DELETE from menu  WHERE person=? AND name=?";
        $statement = $db->prepare($delete);
        $statement->bindValue(1, $id);
         $statement->bindValue(2, $name);
        $statement->execute();
}catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
}