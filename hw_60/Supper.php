
<?php
$color="";
$font="";

if(!empty($_GET['Color'])) {
$color=$_GET['Color'];
}
if(!empty($_GET['Font'])) {
$font=$_GET['Font'];
}
?>
<?php
include "header.php"
?>

   

<body>
<h1>Supper:chicken, duck sauce, potatoes, carrots</h1>

<h2>Enter your prefered Color and Font</h2>
<form class="form-horizontal"  method="get">
<div class="form-group">
<label  class="col-sm-2" >Color</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="Color" name="Color" placeholder="Color"  >
    </div>
  </div>
   <div class="form-group">
     <label  class="col-sm-2">Font</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="Font"  name="Font" placeholder="Font" >
  </div>
  </div>
  <div class="form-group">
      
    <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    </body>      