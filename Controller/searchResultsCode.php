<?php
include('Model/mixedAPI.php');
$api = new mixedAPI();


if(isset($_GET["type"]))
	$type = $_GET["type"];

if(isset($_GET["query"]))
	$query = $_GET["query"];
	else 
		die();


/*
 * 
 * FOR TESTING 
 * 
 */
//$type = 'Instructor';
//$query = 'Gross';

//END TESTING

switch($type){
	
	case 'Instructor':
		$results = $api->getProfessorByName($query,10);
		break;
	
	case 'CourseName':
		$results = $api->getClassesByTitle($query,10);
		break;
		
	case 'CourseNumber':
		$results = $api->getClassesByID($query,10);
		break;
	
}

if(!$query || !$results) //we got nothing
	$type = null;





?>
