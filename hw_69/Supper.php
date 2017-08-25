<? php
include 'AbstractPage.php';
class Supper extends AbstractPage{

    public function content(){
       
  echo "<h1>Supper 1:Chicken, Rice, carrots</h1><br>";
   echo "<h2>Lunch 2:Shnitzel, Potatoes, ketchup </h2><br>"; 

    }
}

$supper=new Supper;
$supper->pages();


?>