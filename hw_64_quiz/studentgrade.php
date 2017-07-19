<? php
$cs = "mysql:host=localhost;dbname=course";
    $user = "course";
    $password = '1234';
   $nameD="";
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        $query = "SELECT A.name as name, A.grade as grade1, B.grade as grade2 
FROM student_grade A, student_grade B  GROUP BY name";
        $results = $db->query($query);
        
        $grades=$results->fetchAll();
 
        $results->closeCursor();

        if(isset($_POST['nameD'])){
            $nameD=$_POST['nameD'];
        }


        $delete="DELETE  from student_grade WHERE name =?";
        $statement = $db->prepare($delete);
        $statement->bindValue(1, $nameD);

$statement->execute();
 } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>students</title>

    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
    <div class="row">
    <table class="table-striped">
    <thead>
    <tr>
    <th>name</th>
    <th>grade1</th>
    <th>grade2</th>
    </tr>
    </thead>
    <tbody>
     <?php foreach ($grades as $grade) : ?>
    <tr>
    <td><?=$grade['name']?></td>
 <td><?=$grade['grade1']?></td>
<td><?=$grade['grade2']?></td>
</tr>
<?php endforeach?>
    
</tbody>
</table>
</div>
<form class="form-horizontal"  method="post">
<div class="form-group">
<label  class="col-sm-2" >Enter name to Delete</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="nameD" name="nameD"   >
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
   