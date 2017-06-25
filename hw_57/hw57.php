<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>php</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>


<?php 
$trump=["Donald Trump", "2017-"];
$obama=["Barack Obama", "2009-2016"];
$bush=["George Bush", "2001-2008"];
$presidents=[$trump,$obama,$bush];
 
$trum=["name"=>"Donald Trump",
"year"=>2017
];
$obam=["name"=>"Barack Obama",
"year"=>"2009-2016"
];
$bus=["name"=>"George Bush",
"year"=>"2001-2008"
];
$presidentsA=[$trum,$obam,$bus];
?>

<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Years</th>
        </tr>
        
            <?php
            
            foreach($presidents as $president) {
            echo "<tr>";
            for($i=0; $i<2; $i++){
          echo  "<td> $president[$i]</td>";
            
            }
            echo"</tr>";
            }
            ?>
            
            </table>
            

            <table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Years</th>
        </tr>
        
            <?php

          foreach($presidentsA as $pres) {
             echo "<tr>";
                echo  "<td>". $pres["name"]."</td>";
                echo  "<td>" .$pres["year"]."</td>";  
            
          echo  "</tr>";
          }
            ?>
            
            
          

            </table>
</body>

</html>