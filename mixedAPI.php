<?php
include('classesAPI.php');
include('DB.php');



class mixedApi
{
	private $api;
	private $db;
	
	
	public function __construct()
	{
		$this->api = new classesAPI('98e578648eb811e394bf12313d000d18');
		$this->db=  new DB();
	}




public function getClassesByProfessor($person_name,$limit)
{
	
	$result = $this->api->getClassesByProfessor($person_name, $limit);
	
	//add the rating for each professor
	foreach($result as $key=>$value){
	
		$value->professor[name] = $value->Instructor1Name;
		$value->professor[rating] = $this->db->getProfessorRatingByName($value->professor[name]);
		
	}
	return $result;

}

}