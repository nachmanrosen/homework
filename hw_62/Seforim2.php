
<?php
$sefer="";
$price="";
if(!empty($_POST['Sefer'])){
    $sefer=$_POST['Sefer'];
}
$cs = "mysql:host=localhost;dbname=seforim";
    $user = "seforim";
    $password = '1234';
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query = "SELECT price FROM seforim_price WHERE SeferName='$sefer'";
        
        $results = $db->query($query);
        $row = $results->fetch();
        


 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 </head>
 <body>
            <div>
                <div class="well col-sm-2 text-right">Sefer Selected </div>
                <div class="col-sm-10 well"><?=$sefer ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Price </div>
                <div class="col-sm-10 well"><?=$row['price'] ?></div>
            </div>
            </body>
            </html>