 <?php 
 session_start();
 $img="";
 $id="";
if(!empty($_SESSION['id'])){
$id=$_SESSION['id'];
}
if(!empty($_POST['img'])){
 $img=$_POST['img'];
}
 
            include 'db.php';
            try{
            $delete="DELETE  from labels WHERE image =? AND CustomerID=? ";
            $statement = $db->prepare($delete);
            $statement->bindValue(1,$img );
            $statement->bindValue(2,$id );
            $statement->execute();   
         
                
}catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
            
        ?>