<?php
ini_set('max_execution_time', 21600000);
include('DB.php');
include('phpQuery-onefile.php');

$db= new DB();

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
?>