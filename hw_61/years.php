<?php
function years(){
  $year=1990;
  for($i=0;$i++;$i<38){
    $year+=$i;
    return " <option value=" $year >  $year </option>";
  } 
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
</hesd>

<body>
  <h1>Enter Month and Year to get number of days in the Month</h1>
  </br>
<form class="form-horizontal"  action="calcDays.php"  method="post">
<div class="form-group">
<label  class="col-sm-2" >Month</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="Month" name="Month" placeholder="Month"  >
    </div>
  </div>
   <div class="form-group">
     <label  class="col-sm-2"placeholder="Year" >Year</label> 
     <div class="col-sm-10">
    <select class="form-control" name="Year" >
    <?=echo  years(); ?>
        </select>
     
  </div>
  </div>
  <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    </body>