<?php
session_start();
$name="";
$ing1="";
$ing2="";
$ing3="";
$ing4="";
$ing5="";
$ing6="";
$ing7="";
$id="";
//a great function. you don't have to write a seperate code for each variable
function getval($val){
    if(isset($_POST[$val])){ 
        if(empty($_POST[$val])){
            return "";}
        else{
            return $_POST[$val]; }
    } return "";
}

$name=getval("name");
$ing1=getval("ing1");
$ing2=getval("ing2");
$ing3=getval("ing3");
$ing4=getval("ing4");
$ing5=getval("ing5");
$ing6=getval("ing6");
$ing7=getval("ing7");

$id=$_SESSION['id'];
//set days to value of selected option
if(isset($_POST['days'])){
    $_SESSION['days']=$_POST['days'];
}



if(isset($_POST['submit'])&&isset($ing1)){
    include 'db.php';
    try{
        $insert="INSERT INTO menu (name, ing1,ing2,ing3,ing4,person,ing5,ing6,ing7) VALUES(?,?,?,?,?,?,?,?,?)";
        $statement=$db->prepare($insert);
        $statement->bindParam(1,$name);
        $statement->bindParam(2,$ing1);
        $statement->bindParam(3,$ing2);
        $statement->bindParam(4,$ing3);
        $statement->bindParam(5,$ing4);
        $statement->bindParam(6,$id);
        $statement->bindParam(7,$ing5);
        $statement->bindParam(8,$ing6);
        $statement->bindParam(9,$ing7);
        $statement->execute();
    }catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>supper form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 <style>
 body{
     background-color:lightblue;
 }
h1,p{
    text-align:center;
    font-size:30px;
}
#sug{
    border:1px solid black;
    margin:0 auto;
    display:inline-block;
    text-align:center;
    margin-left:400px;
}


 </style>
 </head>

<body>
<?php 
    include 'header.html'; ?>
<h1>Enter Your Supper Menu Into Our Database</h1>

<form class="form-horizontal"  action=""  method="post">
    <div class="form-group">
        <label  class="col-sm-2" >Supper Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name" name="name" placeholder=" Name"  >
    </div>
    </div>
  <div class="form-group">
        <label  class="col-sm-2" > Ingredient 1</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="ing1" name="ing1" placeholder=""  >
    </div>
  </div>
  <div class="form-group">
        <label  class="col-sm-2" >Ingredient 2</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="ing2" name="ing2" placeholder=""  >
        </div>
    </div>
   <div class="form-group">
        <label  class="col-sm-2" >Ingredient 3</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="ing3" name="ing3" placeholder=""  >
        </div>
    </div>
  <div class="form-group">
        <label  class="col-sm-2" >Ingredient 4</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="ing4" name="ing4" placeholder=""  >
         </div>
    </div>
   <div class="form-group">
        <label  class="col-sm-2" >Ingredient 5</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="ing5" name="ing5" placeholder=""  >
        </div>
  </div> 
  <div class="form-group">
        <label  class="col-sm-2" >Ingredient 6</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="ing6" name="ing6" placeholder=""  >
        </div>
  </div> 
  <div class="form-group">
        <label  class="col-sm-2" >Ingredient 7</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="ing7" name="ing7" placeholder=""  >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" style="width:300px; height:70px;" name="submit" id="submit" > Save Your Supper In Database</button>
 </form>
             <br>
             <br>
 <form action="" method="post">
        <label  class="col-sm-2" >Number of Suppers to Pick</label>
        <div class="col-sm-2">
            <select id="days" name="days" >
                <option>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
        </div>
        <script src="/jquery-3.2.1.min.js"></script>
        <script>
        //when user selects option, posts the option to same page to be stored in a sessions variable
        $('select').on('change',function(){

             $.post("Menu.php",{days:this.value},function(){
            }).fail(function (xhr, statusCode, statusText) {
            alert("error: " + statusText);
        });
        });
         //<button type="submit" class="btn btn-primary" style="width:200px; height:70px;" name="submit" id="submit" > Select Number</button>
        </script>
         <br>
          <input type="button"style="margin-left:250px; width:200px; height:75px;" value="Pick Suppers" onclick="window.location.href='PickSuppers.php'" > 
        </div>
    </div>
</form>

  <div id="sug">
    <h1>Suggested Suppers</h1>
    <p>deli-salad: deli, lettuce,tomatoes,avocado,mayonnaise</p> <button id="deli-salad">ADD</button>
    <p>noodles and tuna-fish: noodles, tuna-fish ,ketchup ,cheese, marinara sauce </p><button id="noodles and tuna-fish">ADD</button>
    <p>shnitzel :chicken breasts ,corn flake crumbs ,mayonnaise, pam, salt </p><button id="shnitzel">ADD</button>
    <p>chicken :chicken, ducksauce ,potatoes, onions, carrots </p><button id="chicken">ADD</button>
 </div>

<script src="/jquery-3.2.1.min.js"></script>
<script>
//when user clicks add button, posts the selected supper id to add.php using ajax
    $('button').click(function(){

     $.post("add.php",{name:this.id},function(){
     }).fail(function (xhr, statusCode, statusText) {
            alert("error: " + statusText);
        });
    });
     </script>
 
</body>
</html>