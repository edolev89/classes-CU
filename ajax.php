<?php
include('Model/DB.php');


$db=  new DB();

$courseNumber = $_POST['courseNumber'];
$courseName=$_POST['courseName'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$workLoad=$_POST['workLoad'];
$helpfulness=$_POST['helpfulness'];
$clarity=$_POST['clarity'];
$easiness=$_POST['easiness'];
$knowledge=$_POST['knowledge'];
$review=$_POST['words'];


//$db->addReview($cnumber,$cname,$workload,$help,$clar,$easy,$knowledge);
$db->addReview($_POST['courseNumber'], $_POST['courseName'],$_POST['workLoad'],$review, $_POST['helpfulness'], $_POST['clarity'],$_POST['easiness'],$_POST['knowledge']);

?>
