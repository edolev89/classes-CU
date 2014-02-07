<?php
error_reporting( E_ALL );
ini_set('display_errors', 1);

define ( "param1Average", "param1Average" );
class DB {
	private $mysqli;
	public function __construct() {
		 $this->mysqli = new mysqli("localhost", "root", "password", "classesCU");
		//$this->mysqli = new mysqli ( "localhost", "root", "root", "classesCU" );
		
		
		if ($this->mysqli->connect_error) {
			die ( 'Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error );
		}

	}
	
	
	public function addUser($id, $firstName, $lastName, $email) {
		

		$insert = "INSERT IGNORE INTO users (facebookID,email,firstName,lastName) VALUES ($id,'$email','$firstName','$lastName');";

		if(!$query = $this->mysqli->query ($insert))
			echo "INSERT failed: (" . $query->errno . ") " . $query->error;
			
		
	}
	
	public function getProfessorRatingByName($name) {
		
		// STRICKLAND, DAWN M
		// HOLLIDAY, ROBERT L
		// GROSS, JONATHAN L
		
		// 
		
		// split fullname to first and last
		$delimiter = strpos ( $name, ',' );
		$space = strpos ( $name, " ", $delimiter + 1 );
		$lastName = substr ( $name, 0, $delimiter );
		$firstName = substr ( $name, ($delimiter + 2) );
		
		// if middle name exists remove it
		$space = strpos ( $firstName, " " );
		if ($space != 0)
			$firstName = substr ( $firstName, 0, $space );
			
			// get rating from DB
		if (! $query = $this->mysqli->query ( "SELECT nugget FROM professors WHERE `firstName`= '$firstName' AND `lastName` = '$lastName'" ))
			return false;
		
		$row = $query->fetch_assoc ();
		
		return $row ['nugget'];
	}
	public function getProfessorIDByName($name) {
		
		// split fullname to first and last
		$delimiter = strpos ( $name, ',' );
		$space = strpos ( $name, " ", $delimiter + 1 );
		$lastName = substr ( $name, 0, $delimiter );
		$firstName = substr ( $name, ($delimiter + 2) );
		
		// if middle name exists remove it
		$space = strpos ( $firstName, " " );
		if ($space != 0)
			$firstName = substr ( $firstName, 0, $space );
			
			// get rating from DB
		if (! $query = $this->mysqli->query ( "SELECT id FROM professors WHERE `firstName`= '$firstName' AND `lastName` = '$lastName'" ))
			return false;
		
		$row = $query->fetch_assoc ();
		
		return $row ['id'];
	}
	
	public function getProfessorNameByID($id){
		
		if (! $query = $this->mysqli->query ( "SELECT firstName,lastName FROM professors WHERE `id` = '$id'" ))
			return false;
		
		$row = $query->fetch_assoc ();
		
		return $row['firstName']." ".$row['lastName'];
		
		
	}
	
	public function getTopProfessors($limit) {
		if (! $query = $this->mysqli->query ( "SELECT * FROM professors ORDER BY " . param1Average . " DESC LIMIT 0," . $limit . "" ))
			// /return false;
			
			// get all rows to an array
			$json = array ();
		while ( $row = $query->fetch_assoc () ) {
			$json [] = $row;
		}
		// return json_encode($json );
		return $json;
	}
	public function getTopClasses($limit) {
		
		if (! $query = $this->mysqli->query ( "SELECT * FROM classes ORDER BY " . param1Average . " DESC LIMIT 0," . $limit . "" ))
			// /return false;
			
			// get all rows to an array
			$json = array ();
			$i = 0;
			
		while ( $row = $query->fetch_assoc () ) {
			//add row data to json			
			$json [] = $row;
			
			//get the profesoor name into the json too
			$id = $json[$i]['professorID'];
			$json[$i]['name'] = $this->getProfessorNameByID($id);
			
			$i++;
		}
		
		
		
		// return json_encode($json );
		return $json;
	}
	
	public function getEasyAClasses($limit){
		//xdebug_break();
		
		if (! $query = $this->mysqli->query ( "SELECT * FROM classes ORDER BY easyA  DESC LIMIT 0," . $limit . "" ))
			// /return false;
				
			// get all rows to an array
			$json = array ();
		$i = 0;
			
		while ( $row = $query->fetch_assoc () ) {
			//add row data to json
			$json [] = $row;
				
			//get the profesoor name into the json too
			$id = $json[$i]['professorID'];
			$json[$i]['name'] = $this->getProfessorNameByID($id);
				
			$i++;
		}
		
		
		
		// return json_encode($json );
		return $json;
		
	}



	public function getReviews(){
		if (! $query = $this->mysqli->query ( "SELECT id FROM reviews" ))
	
			$json = array ();
		while ( $row = $query->fetch_assoc () ) {
			$json [] = $row[id];
		}
		// return json_encode($json );
		return $json;
	}
	

	public function  addDataToReview($id, $number, $name){
		
		if (! $query = $this->mysqli->query ( "UPDATE reviews SET courseNumber='$number', courseName='$name' WHERE id=$id" ))
			echo "INSERT failed: (" . $query->errno . ") " . $query->error;

		
	}

}
	
	
	