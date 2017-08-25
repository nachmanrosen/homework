<? php
include 'AbstractPage.php';
class Lunch extends AbstractPage{

    public function content(){
       
  echo "<h1>Lunch 1:Bread, Smart balance, Apple</h1>";
  echo " <h2>Lunch 2:Noodles, ketchup, cheese </h2>"; 

    }
}

$lunch=new Lunch;
$lunch->pages();

?>