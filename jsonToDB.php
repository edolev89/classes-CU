ooo
<?php


//create a DB connection

$mysqli = new mysqli("localhost", "root", "root", "classesCU");
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*
//read all proffesors data
//save to DB

$professorsFile = "professors.json";
$result = json_decode(file_get_contents($professorsFile));

foreach($result as $key => $value) {
	if($value) {

		//how to use json array to insert data in Database
		if(!$mysqli->query("INSERT INTO proffesors (id, nugget, firstName, lastName, middleName) VALUES ($value->id, '$value->nugget','$value->first_name','$value->last_name','$value->middle_name');"))
			echo $mysqli->error;
		
		
		echo $value->id."</br>";
	}
	//mysql_close($con);
}

*/

//INSERT INTO `classesCU`.`reviews` (`id`, `funny`, `workload`, `review`, `disagree`, `agree`, `professors`) VALUES ('1', '1', '1', '1', '1', '1', '1');



//read all review data
//save to DB

$reviewsFile = "segmentaf";
$reviewsFile = file_get_contents($reviewsFile);
//echo print_r($reviewsFile);

if($reviewsFile == false)
	echo "cant open";

$result = json_decode($reviewsFile);

switch (json_last_error()) {
	case JSON_ERROR_NONE:
		echo ' - No errors';
		break;
	case JSON_ERROR_DEPTH:
		echo ' - Maximum stack depth exceeded';
		break;
	case JSON_ERROR_STATE_MISMATCH:
		echo ' - Underflow or the modes mismatch';
		break;
	case JSON_ERROR_CTRL_CHAR:
		echo ' - Unexpected control character found';
		break;
	case JSON_ERROR_SYNTAX:
		echo ' - Syntax error, malformed JSON';
		break;
	case JSON_ERROR_UTF8:
		echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
		break;
	default:
		echo ' - Unknown error';
		break;
}


foreach($result as $key => $value) {
	if($value) {
		
		$value->review = $mysqli->real_escape_string($value->review);
		$value->professors = $mysqli->real_escape_string($value->professors[0]);
		$value->workload = $mysqli->real_escape_string($value->workload);
		
		//how to use json array to insert data in Database
		if(!$qresult = $mysqli->query("INSERT INTO `classesCU`.`reviews` (`id`, `funny`, `workload`, `review`, `disagree`, `agree`, `professors`) VALUES 
																($value->id, $value->funny, '$value->workload', '$value->review', $value->disagree, $value->agree,$value->professors);"))
			echo $mysqli->error;
		
	}
	
		echo $qresult;
		
			
		
	
	mysql_close($con);

}





?>