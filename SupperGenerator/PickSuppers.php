<?php
session_start();
$id="";
$days=5;   //default is 5 days
$i=0;

$id=$_SESSION['id'];
if(isset($_SESSION['days'])){
    $days=$_SESSION['days'];
}
include 'db.php';
try{      //picks randomly  suppers from this customers suppers. the customer is identified by his e-mail which is stored in $_SESSION['id']
        
         //stored procedure get_menu takes two variables get_menu(days, id)  . procedure executes query "SELECT name, ing1,ing2,ing3,ing4,ing5,ing6,ing7 FROM menu WHERE person=? ORDER BY RAND() LIMIT ? ";
       
        //calling stored procedure
         $db = new PDO($cs, $user, $password, $options);
        $query='CALL get_Menu(?,?)';
        $statement = $db->prepare($query);
        $statement->bindParam(1, $days);
        $statement->bindParam(2,$id);
        //execute stored procedure
        $statement->execute();
        $suppers = $statement->fetchAll();
        $statement->closeCursor();
}catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>supper form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
 <link href="print.css" rel="stylesheet" media="print"/>
 <style>
 @media print {
     #list{
         display:none;
     }
     
 }
 body{
     background-color:lightblue;
 }
 #list{ 
 }
 #list ul{
     display:block;
     
 }
 
h1{
    text-align:center;
    
}
h2{
    position:relative;
    left:17%;
}
.container{
    display: flex;
    justify-content: flex-start 
}
.fixed{
     width: 30%;
     border:2px solid black;
     padding-left:5px;
     padding-right:5px;
     
}
.flex-item{
    flex-grow: 1;
    font-size:25px;
    border:2px solid black;
    text-align:center;
}
#item{   
}
   /*width:20%;
   
    text-align:left;
}
  #items ul,#items2 ul{
   width:10%;
    text-align:left;
   
  
  @media screen and (max-width: 1300px){
      #item2{
          font-size:18px;
          max-width:70%;
      }
  }*/
  

 </style>
 </head>
<body>
    <?php include 'header.html';  ?>
<h1>THIS WEEKS SUPPER MENU</h1>
<table  class="table table-striped table-hover">
    <tr>
        <th>Days</th>
        <th></th>
        <th>Supper</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
        <th>Ingredient</th>
    </tr>
 <?php foreach($suppers as $supper) :
    echo "<tr>";
        $i++;
        echo '<td>'.'Day '.$i.'<td>';  
        echo '<td>'. $supper['name']. '</td>';
        for($x = 1; $x <8; $x++) {
        echo '<td>'.$supper['ing'.$x].'</td>';
        }
        echo '</tr>';
    
             endforeach ?>
 
 </table>
<p><input id="btnSubmit" type="submit" value="Print" onclick="display();" /></p>
<script>
//prints screen using @media print css to only print table
function display() {
  
 window.print();
}
</script>
<br>
<br>

<div class="container">
<div class="fixed" id="list">
    <h1>Shopping List</h1>
  <ul id="shopping">
    <?php  
    $list=[];

     foreach($suppers as $supper) : 
        //turn multidemsional array into one array. don't include supper name, only include ingredients. 
             
        for($x = 1; $x <11; $x++) {
             if(!empty($supper['ing'.$x])){
                $list[]=$supper['ing'.$x];
             }
                 }
     endforeach; 
     //remove duplicates
      $list=array_unique($list);
      //alphabetive list
    sort($list);
    
    //display list
        $clength = count($list);
     for($x = 0; $x < $clength; $x++) { ?>
      <li><?php echo $list[$x]; ?></li><br>
<?php } ?>
</ul>

<p><input id="btnSubmit" type="submit" value="Print" onclick="printout();" /></p>
<script>
function printout() {

    var newWindow = window.open();
    newWindow.document.write(document.getElementById("list").innerHTML);
    newWindow.print();
}
</script>
</div> 

<div class="flex-item" id="items">
<h1>Add Items To My Shopping List</h1>
<form>
<ul>
<h1>dairy</h1>

  <li> <input type="checkbox"  value="milk" id="milk"/>milk</input></li>
  <li><input type="checkbox"  id="cheese"/>cheese</input></li>
  <li> <input type="checkbox"  id="yogurt"/> yogurt</input></li>
   <li> <input type="checkbox"  id="cream cheese"/>cream cheese</input></li>
   <li> <input type="checkbox" id="cottage cheese"/> cottage cheese</input></li>
   <li> <input type="checkbox"  id="butter"/>butter</input></li>
   <li> <input type="checkbox" id="eggs">eggs</input></li>

<h1>bakery</h1>
   <li><input type="checkbox" id="bread">bread</input></li>
   <li><input type="checkbox" id="whole wheat bread">whole-wheat bread</input></li>
   <li><input type="checkbox" id="pita">pita</input></li>
   <li><input type="checkbox" id="challah">challah</input></li>

   <h1>snacks</h1>
   <li><input type="checkbox" id="crackers">crackers </input></li>
   <li><input type="checkbox"  id="pretzels">pretzels </input></li>
   <li><input type="checkbox" id="potato chips">potato chips </input></li>
   <li><input type="checkbox"  id="snack bags">snack bags </input></li>
  <h1>breakfast</h1>
  <li><input type="checkbox"  id="cereal">cereal </input></li>
  <li><input type="checkbox"  id="oatmeal">oatmeal </input></li>

  <h1>drinks</h1>
      
   <li><input type="checkbox"  id="apple juice">apple juice</input></li>
   <li><input type="checkbox"  id="orange juice">orange juice</input></li>
   <li><input type="checkbox"  id="grape juice">grape juice</input></li>
  <li><input type="checkbox"  id="seltzer">seltzer</input></li>
 
 <h1>fruits and vegetables</h1>
  <li><input type="checkbox"  id="apples">apples</input></li>
  <li><input type="checkbox"  id="oranges">oranges</input></li>
  <li><input type="checkbox"  id="peaches">peaches</input></li>
  <li><input type="checkbox" id="tomatoes"> tomatoes</input></li>
  <li><input type="checkbox"  id="avocado">avocado</input></li>
  <li><input type="checkbox"  id="lettuce"> lettuce</input></li>
  <li><input type="checkbox" id="grapes">grapes</input></li>
  <li><input type="checkbox" id="pepper"> pepper</input></li>
  <li><input type="checkbox"  id="carrots">carrots</input></li>

  <h1>cleaning supplies</h1>
<li><input type="checkbox" id="hand soap">hand soap</input></li>
<li><input type="checkbox" id="hand cream">hand cream</input></li>
  <li><input type="checkbox" id="dish liquid soap">dish liquid soap </input></li>
  <li><input type="checkbox"  id="dishwasher detergent">dishwasher detergent</input></li>
<h1>paper goods</h1>
  <li><input type="checkbox" id="plastic cups">plastic cups</input></li>
  <li><input type="checkbox" id="hot cups"> hot cups</input></li>
  <li><input type="checkbox"  id="bowls">bowls</input></li>
   <li><input type="checkbox" id="plates">plates</input></li>
  <li><input type="checkbox"  id="sandwich bags">sandwich bags</input></li>
  <li><input type="checkbox"  id="garbage bags">garbage bags</input></li>
  <li><input type="checkbox"  id="aluminum foil">aluminum foil</input></li>
  </ul>
  </form>
</div>
</div>
<script src="/jquery-3.2.1.min.js"></script> 
<script>
//add checked items to list in alphabetical order
//change php array into js
 var js_array =<?php echo json_encode($list); ?>;


//add checked items id to js array
$(":checkbox").change(function(){
var id = $(this).attr('id');
//check if checkbox is checked
if($(this).prop("checked") == true){
    js_array.push(id);

//alphabetize new array
    js_array.sort();

//empty list from ul
    $('#shopping').empty();

//display new list in ul
    $.each(js_array, function(i,food){
    $('#shopping').append('<li>'+food+'</li>'+'<br>'); 

});
}




});



</script>
</body>
</html>