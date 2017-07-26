<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<h1>Delete Sefer from Database</h1>
<form method="post">
<label class="col-sm-2" >Enter name  of Sefer to Delete</label>
    <select class="form-group" id="nameD" name="nameD"   >
    <?php
    foreach($list as $sefer) {
        echo "<option>{$sefer['SeferName']}</option>";
    }
    ?>
    </select>
     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    </body>
    </html>