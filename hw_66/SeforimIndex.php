<?php
if(isset($_GET['action'])){
    $action=$_GET['action'];
}

switch ($action) {
case 'choose': 
include 'SeferChooseController.php';
exit;
case 'add':
include 'SeferAddController.php';
exit;
case 'delete':
include 'SeferDeleteController.php';
exit;
default:
echo "not a valid choice";
}
?>php