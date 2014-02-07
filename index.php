<?php
include('mixedAPI.php');

// Point to where you downloaded the phar

 


$api = new mixedAPI();

//$result = $api->getClassesByID("COMS3157", $limit);
//$result = $api->getTopProfessors(10);
$result = $api->getTopClasses(10);

//$result = $api->getClassesByTitle("Discrete Mathematics");
//print_r($result);

foreach($result as $key => $value) {
	
	print_r($value);
	//echo $value->Instructor1Name."<br/>";
	//echo $value->data->sections[0]->Instructor1Name;
	
	
	
}

?>