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
	
	
	//$('.date').next().find('a').eq(0)
	
	$reviewProf =  pq('.date')->next()->find('a')->eq(0)->text();
	//echo $reviewProf;
	//$start = strpos($reviewProf->elements[0]->nodeValue, "class") + strlen("class>");
	//$end = strpos($reviewProf->elements[0]->nodeValue, "</a>");
	//$reviewProf = substr($reviewProf->elements[0]->nodeValue,0,$start-$end);
	
	
	$name = preg_replace('/[^a-zA-Z0-9!@#$"\'\/()\.,]/', '', $reviewProf);
	//echo $name;
	
	$delimiter = strpos ( $name, ',' );
	$space = strpos ( $name, " ", $delimiter + 1 );
	$lastName = substr ( $name, 0, $delimiter );
	$firstName = substr ( $name, ($delimiter + 1) );
	
	
	// if middle name exists remove it
	$space = strpos ( $firstName, " " );
	if ($space != 0)
		$firstName = substr ( $firstName, 0, $space );
		
	if(strpos($firstName,"EVIEWYOURINSTRUCTORS") ===0)
		continue;

	echo $firstName." ". $lastName;
	
	$firstName = mysql_real_escape_string($firstName);
	$lastName = mysql_real_escape_string($lastName);
	
	$db->addProfNameToReview($firstName, $lastName,$review);
	//echo $review;

/*
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
	 
	 */
}



/*

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

*/
?>