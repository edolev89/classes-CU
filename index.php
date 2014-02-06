<?php
include('mixedAPI.php');

// Point to where you downloaded the phar

 


$api = new mixedAPI();

$result = $api->getClassesByProfessor("Jae");


foreach($result as $key => $value) {
	
	print_r($value);
	//echo $value->Instructor1Name."<br/>";
	//echo $value->data->sections[0]->Instructor1Name;
	
	
	
}

?>