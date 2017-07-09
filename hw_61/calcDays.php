<?php
$month="";
$year="";
if(!empty($_POST['Month'])) {
$month=$_POST['Month'];
}
if(!empty($_POST['Year'])) {
$year=$_POST['Year'];
}

$monthArray=[ 
   
   "january"=>"31",
    "march"=>"31",
    "april"=>"30",
    "may"=>"31",
    "june"=>"30",
    "july"=>"31",
    "august"=>"31",
    "september"=>"30",
    "october"=>"31",
    "november"=>"30",
    "december"=>"31",
    "february"=> Feb($year)
];

function daysInMonth($monthArray,$month) 
{
return $monthArray[$month];
}


function Feb($year)
{
    if(($year%4===0)&!($year%100===0)||($year%400===0))
    {return 29;
    }
    else{
        return 28;
    }
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form</title>
 <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
 </head>
 <body>
            <div>
                <div class="well col-sm-2 text-right">Amount of Days in <?=$month?> </div>
                <div class="col-sm-10 well"><?=daysInMonth($monthArray,$month) ?></div>
            </div>
            </body>
            </html>