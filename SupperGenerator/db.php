<?php
$cs = "mysql:host=localhost;dbname=suppers";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
         } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    ?>