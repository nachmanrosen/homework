<?php
$cs = "mysql:host=localhost;dbname=recipes";
    $user = "seforim";
    $password = '1234';
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query="SELECT ingredient1,ingredient2,ingredient3,image FROM recipehw WHERE name=? ";
        $statement = $db->prepare($query);
        $statement->bindParam(1, $name);
        $statement->execute();
        $recipe = $statement->fetch();
    
}catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
}
echo json_encode($recipe);
 
?>