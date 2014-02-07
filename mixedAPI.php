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
	return $this->addProfessorsRatingToQuery($result);
	

}

public function getClassesByDepartment($department,$limit)
{
	$result = $this->api->getClassesByDepartment($department, $limit);
	return $this->addProfessorsRatingToQuery($result);
	
	
}

public function getClassesByTitle($title,$limit)
{

	$result = $this->api->getClassesByTitle($title, $limit);
	return $this->addProfessorsInfoToQuery($result);
	
	
	
}

public function getClassesByID($id,$limit)
{
	$result = $this->api->getClassesByID($id, $limit);

	return $this->addProfessorsInfoToQuery($result);
	
	
	
}

public function getTopProfessors($limit){
	
	return $this->db->getTopProfessors(10);
	
}

public function getTopClasses($limit = 10){

	return $this->db->getTopClasses($limit);

}


//PRIVATES//


private function addProfessorsInfoToQuery($query){
	
	foreach($query as $key=>$value){
	
		//if querty returned sections, find rating for each professor in each section
		if(isset($value->Sections)){
				
			foreach($value->Sections as $key => $section){
	
				$section->professor[name] = $section->Instructor1Name;
				$section->professor[rating] = $this->db->getProfessorRatingByName($section->professor[name]);
				$section->professor[id] = $this->db->getProfessorIDByName($section->professor[name]);
				
			}
				
		}
	
		else{ //no sections
			$value->professor[name] = $value->Instructor1Name;
			$value->professor[rating] = $this->db->getProfessorRatingByName($value->professor[name]);
			$section->professor[id] = $this->db->getProfessorIDByName($section->professor[name]);
				
		}
	
	
	
	}
	
	return $query;
	
}



}