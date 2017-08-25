<? php
include 'AbstractPage.php';
class Breakfast extends AbstractPage{

    public function content(){
       
  echo "<h2>Breakfast 1:Corn Flakes, Milk, Orange Juice</h2>";
    echo "<h2>Breakfast 2:Toast, Creamcheese, Apple Juice </h2>"; 

    }
}

$breakfast= new Breakfast;
$breakfast->pages();

?>