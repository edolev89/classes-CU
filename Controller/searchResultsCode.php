<?php
include('Model/mixedAPI.php');
$api = new mixedAPI();


if(isset($_GET["type"]))
	$type = $_GET["type"];

if(isset($_GET["query"]))
	$type = $_GET["query"];

switch($type){
	
	case 'Instructor':
		$result = $api->getClassesByProfessor($query);
	
	case 'courseName':
		$result = $api->getClassesByTitle($query);
	
	case 'courseNumber':
		$result = $api->getClassesByID($query);
	
}




?>
