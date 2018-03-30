<?php
$date = date("y.m.d");      //get todays date
//set customers enddate to be  in 30 days from today
$enddate=Date('y:m:d', strtotime("+30 days"));

include 'db.php';

    
    
    if(!empty($id)&&!empty($hash)){
try{ //first get freetrial from db. 
        $select="SELECT freetrial from subscribers WHERE person=?";
        $statement = $db->prepare($select);
        $statement->bindParam(1, $id);
        $statement->execute();
        $ft=$statement->fetch();
        echo $ft[0];
       
        if($ft[0]!=="yes") {
        $insert="INSERT INTO subscribers (person,password,startDate,enddate,freetrial) VALUES (?,?,?,?,'yes') ";
        $statement = $db->prepare($insert);
        $statement->bindParam(1, $id);
        $statement->bindParam(2, $hash);

        $statement->bindParam(3, $date);
        $statement->bindParam(4, $enddate);
        $statement->execute();
        ?>
        <script>
            alert("Welcome to Supper Generator");
           window.location.href ='home.php';
            </script>
            <?php
        
         exit;
        }
         //if already had freetrial don't allow to register for free
       else if($ft[0]=='yes'){
            header('Location:renew.php');
            exit;
        }
    
    }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    }
 
?>