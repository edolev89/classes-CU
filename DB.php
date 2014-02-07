<?php

define("param1Average", "param1Average");



class DB
{
	private $mysqli;
	
	
	public function __construct()
	{
		$this->mysqli = new mysqli("107.170.18.96", "root", "password", "classesCU");
		
		if ($this->mysqli->connect_error) {
			die('Connect Error (' . $mysqli->connect_errno . ') '
					. $mysqli->connect_error);
		}
	}


	
	public function getProfessorRatingByName($name){
		
		//split fullname to first and last
		$delimiter = strpos($name,',');
		$space = strpos($name," ",$delimiter+1);
		$lastName = substr($name,0,$delimiter);
		$firstName = substr($name,($delimiter+2),$space-1);
		
		
		//get rating from DB
		if(!$query = $this->mysqli->query("SELECT nugget FROM professors WHERE `firstName`= '$firstName' AND `lastName` = '$lastName'"))
			return false;
		
		$row = $query->fetch_assoc();
		
		
		return $row['nugget'];
		
		
	}
	
	
	public function getTopProfessors($limit){
	
		if(!$query = $this->mysqli->query("SELECT * FROM professors ORDER BY ".param1Average." DESC LIMIT 0,".$limit.""))
			///return false;
		
		echo "SELECT * FROM professors ORDER BY ".param1Average." DESC LIMIT 0,".$limit."";
		
		return $query->mysqli_fetch_all();
	
	}

		
	
		
	}
	
	
	