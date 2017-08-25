<? php
 abstract class AbstractPage
 { 
     public function pages() { 
     include 'top.php';
     $this->content();
     include 'bottom.php';
 }
 abstract public function content();

}




?>