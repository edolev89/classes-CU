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
//$type = 'ClassName';
//$query = 'Advanced';

//END TESTING

switch($type){
	
	case 'Instructor':
		$results = $api->getProfessorByName($query,10);
		break;
	
	case 'ClassName':
		$results = $api->getClassesByTitle($query,10);
		break;
		
	case 'ClassNumber':
		$results = $api->getClassesByID($query,10);
		break;
	
}

if(!$query || !$results) //we got nothing
	$type = null;





?>
