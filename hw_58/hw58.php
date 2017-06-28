<?php
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['e-mail'];
$rate=$_POST['rate'];
if(empty($name)) {
    echo "no name   ";
}
else{
echo "name is:". $name  ;
}
echo "<br/>";
if(empty($age)) {
    echo "no age   ";
}
elseif($age<0||$age>120){
    echo "age is not valid. age must be between 1 and 120";
}
else{
echo "age is:".$age  ;
}
echo "<br/>";
if(empty($email)) {
    echo "no email  ";
}
else{
echo "e-mail is".$email  ;
}
echo "<br/>";
if ($rate<0||$rate>10){
echo "rate is not valid. rate must be between 1 and 10";
}
else{
echo "rate is:".$rate;
}

?>