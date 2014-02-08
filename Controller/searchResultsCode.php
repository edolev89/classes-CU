<?php
include('Model/mixedAPI.php');
$api = new mixedAPI();


if(isset($_GET["type"]))
	$type = $_GET["type"];

if(isset($_GET["query"]))
	$query = $_GET["query"];
//else 
	//die();


/*
 * 
 * FOR TESTING 
 * 
 */
$type = 'instructor';
$query = 'Jae';

//END TESTING

switch($type){
	
	case 'instructor':
		$results = $api->getClassesByProfessor($query,10);
		break;
	
	case 'courseName':
		$results = $api->getClassesByTitle($query,10);
		break;
		
	case 'courseNumber':
		$results = $api->getClassesByID($query,10);
		break;
	
}




?>
