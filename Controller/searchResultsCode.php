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

/**
returns 0 if $term is over
returns 1 if $term is ongoing
returns 2 if $term hasn't started
*/
function termCheck($term) {	
	$classYear = substr($term, 0, 4);
	$classSemester = substr($term, 4, 1);	
	//spring term
	if($classSemester == 1) {
		$classStartMonth = 1;
		$classEndMonth = 5;
	}		
	//summer term
	elseif($classSemester == 2) {
		$classStartMonth = 6;
		$classEndMonth = 8;
	}
	//fall
	else {
		$classStartMonth = 9;
		$classEndMonth = 12;
	}
	$currentYear = date('Y');
	$currentMonth = date('n');
	
	//old class
	if($classYear < $currentYear) {
		return 0;
	}
	//maybe current class
	elseif($classYear == $currentYear) {
		if($classStartMonth <= $currentMonth) {
			//current class
			if($classEndMonth >= $currentMonth) {
				return 1;
			}
			//old class
			else {
				return 0;
			}
		}		
		//future class
		else{
		}
			return 2;
		}
			
	//future class
	else {
		return 2;
	}
		
	return "-1";
}

/**
picks the correct css class for the term td
$term gets current term
*/
function termClassPicker($term) {
	$relativeTerm = termCheck($term);
	
	if($relativeTerm == 0) {
		return "glyphicon-hand-left cu_term_past";
	}
	if($relativeTerm == 1) {
		return "glyphicon-hand-up cu_term_current";
	}
	if($relativeTerm == 2) {
		return "glyphicon-hand-right cu_term_future";
	}
	
	return "";
}



?>
