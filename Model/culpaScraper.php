<?php
ini_set('max_execution_time', 21600000);
include('DB.php');
include('phpQuery-onefile.php');

$db= new DB();


/*
$reviewsId = array();
$reviewsId = $db->getReviews();


foreach($reviewsId as $review){
	
	$file = file_get_contents("http://culpa.info/reviews/$review");
	phpQuery::newDocument($file);
	$courseNumber = pq('.course_number');
	$courseNumber = $courseNumber->elements[0]->nodeValue;
	$courseNumber = str_replace("]", "", $courseNumber);
	$courseNumber = str_replace("[", "", $courseNumber);
	$courseNumber = str_replace(" ", "", $courseNumber);
	
	
	$courseName = pq('.course_name');
	$courseName = $courseName->elements[0]->nodeValue;

	$db->addDataToReview($review, $courseNumber, $courseName);
	//print_r($courseName);
	echo $courseNumber.$courseName; 
	echo "  |  ";
	ob_flush();
	//usleep(100);
}

*/



$professorID = array();
$professorID = $db->getProfessors();

foreach($professorID as $professor){
	
	$file = file_get_contents("http://culpa.info/professors/$professor");
	phpQuery::newDocument($file);
	$professorsDep = pq('.review_this')->next()->next();
	$professorsDep = $professorsDep->elements[0]->nodeValue;
	//print_r($professorsDep);
	$professorsDep = str_replace("Departments:", "", $professorsDep);
	$professorsDep = str_replace("and", ",", $professorsDep);
	$professorsDep = str_replace(", ,", ",", $professorsDep);
	$professorsDep = str_replace("\n", "", $professorsDep);
	$professorsDep = str_replace("\t", "", $professorsDep);
	$db->addDepartmentToProfessor($professor, $professorsDep);
	echo $professorsDep;
	
}
?>