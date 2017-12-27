<?php
 header("Access-Control-Allow-Origin: http://localhost");
$cs = "mysql:host=localhost;dbname=test";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
         
$query = "SELECT * FROM contacts";
$stmt = $db->query($query);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($rows);
} catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
echo json_encode($rows);
?>