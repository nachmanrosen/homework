<? php
$cs = "mysql:host=localhost;dbname=purimlabels";
    $user = "seforim";
    $password = '1234';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

if(!empty($email)){
$update= "UPDATE labels SET Submitted ='YES' WHERE CustomerID=:email";
        $statement = $db->prepare($insert);
        $statement->bindValue('email', $email);
        $statement->execute(); 
}



  }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    ?>