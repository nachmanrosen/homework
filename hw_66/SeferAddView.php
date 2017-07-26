 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
  <h1>Enter a Sefer and its Price to add to our Store's database</h1>
  </br>
<form class="form-horizontal"  action=""  method="post">
<div class="form-group">
<label  class="col-sm-2" >Sefer Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="SeferN" name="SeferN" placeholder="Sefer Name"  >
    </div>
  </div>
   <div class="form-group">
     <label  class="col-sm-2" >Price</label> 
     <div class="col-sm-10">
    <input type="double" class="form-control" id="PriceI" name="PriceI" placeholder="Price" >
    
  </div>
  </div>
    <div class="form-group">
     <label  class="col-sm-2" >Category</label> 
     <select class="col-sm-2" class="form-group" name="Category" id="Category">
     <option>Gemaras</option>
     <option>Rishonim</option>
      <option>Achronim</option>
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
    </html>