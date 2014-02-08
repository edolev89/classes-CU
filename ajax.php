<?php
include ('Model/DB.php');

$db = new DB ();

if (isset ( $_POST ['review'] )) {
	$courseNumber = $_POST ['courseNumber'];
	$courseName = $_POST ['courseName'];
	$firstName = $_POST ['firstName'];
	$lastName = $_POST ['lastName'];
	$workLoad = $_POST ['workload'];
	$helpfulness = $_POST ['helpfulness'];
	$clarity = $_POST ['clarity'];
	$easiness = $_POST ['easiness'];
	$knowledge = $_POST ['knowledge'];
	$review = $_POST ['words'];
	
	print_r($_POST);
	$db->addReview ( $_POST ['courseNumber'], $_POST ['courseName'], $_POST ['workload'], $review, $_POST ['helpfulness'], $_POST ['clarity'], $_POST ['easiness'], $_POST ['knowledge'] );
}

if (isset ( $_POST ['favorites'] )) {
	
	$courseNumber = $_POST ['courseNumber'];
	$courseName = $_POST ['courseName'];
	$firstName = $_POST ['firstName'];
	$lastName = $_POST ['lastName'];
	$id = $_POST ['id'];
	
	echo "SERVER GOT: $courseNumber $courseName $firstName $lastName";
	$db->addToFavs($courseNumber, $courseName, $firstName, $lastName,$id);
}


// $db->addReview($cnumber,$cname,$workload,$help,$clar,$easy,$knowledge);

?>
