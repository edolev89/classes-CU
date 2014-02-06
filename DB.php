<?php



class DB
{
	private $mysqli;
	
	
	public function __construct()
	{
		$this->mysqli = new mysqli("localhost", "root", "root", "classesCU");
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

		
	
		
	}
	
	
	