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
	
	if($result = $this->api->getClassesByProfessor($person_name, $limit)) //we have a result
		return $this->addProfessorsInfoToQuery($result);
	else 
		return false;
	

}

public function getClassesByDepartment($department,$limit)
{
	if($result = $this->api->getClassesByDepartment($department, $limit)) //we have a result
		return $this->addProfessorsInfoToQuery($result);
	else 
		return false;
	
}

public function getClassesByTitle($title,$limit)
{

	if($result = $this->api->getClassesByTitle($title, $limit))
		return $this->addProfessorsInfoToQuery($result);
	else
		return false;
	
	
}



public function getClassesByID($id,$limit)
{
	if($result = $this->api->getClassesByID($id, $limit))
		return $this->addProfessorsInfoToQuery($result);
	else
		return false;
	
	
}


public function getClassesByCallNumber($call,$limit)
{
	if($result = $this->api->getClassesByCallNumber($call, $limit))
		return $result;
		//return $this->addProfessorsInfoToQuery($result);
		
	else
		return false;


}


public function getClassesByCallAndProfessorAndTerm($call,$profName,$term,$limit){
	
	$callResults = $this->getClassesByCallNumber($call, $limit);
	$profResults = $this->getClassesByProfessor($profName, $limit);
	$returnVal;
	
	//we have to make sure that we get the same class the user cliked on the search result,
	// comparing professor, term and term	
	foreach($callResults as $callClass){
		
		foreach($profResults as $profClass){
			
			if($callClass->CallNumber == $profClass->CallNumber && $term == $callClass->Term){
				$returnVal = $callClass;
				break 2;
			}
				//return $callClass;

			
		}
		
	}
	
	return $returnVal;
	
	
}

public function getReviewsByClassNumberAndProfeesor($classNumber,$prof){
	
	return $this->db->getReviewsByClassNumberAndProfeesor($classNumber,$prof);
}

public function getProfessorByName($name,$limit)
{
	if($result = $this->db->getProfessorsByName($name,$limit))
		return $result;
	else
		return false;

}

public function getTopProfessors($limit){
	
	return $this->db->getTopProfessors(10);
	
}

public function getTopClasses($limit = 10){

	return $this->db->getTopClasses($limit);

}

public function getEasyAClasses($limit = 10){

	return $this->db->getEasyAClasses($limit);

}



//PRIVATES//


private function addProfessorsInfoToQuery($query){
	
	foreach($query as $key=>$value){
	
		//if querty returned sections, find rating for each professor in each section
		if(isset($value->Sections)){
				
			foreach($value->Sections as $key => $section){
	
				$section->professor['name'] = $section->Instructor1Name;
				$section->professor['rating'] = $this->db->getProfessorRatingByName($section->professor['name']);
				$section->professor['id'] = $this->db->getProfessorIDByName($section->professor['name']);
				
			}
				
		}
	
		else{ //no sections
			$value->professor['name'] = $value->Instructor1Name;
			$value->professor['rating'] = $this->db->getProfessorRatingByName($value->professor['name']);
			//$section->professor['id'] = $this->db->getProfessorIDByName($section->professor['name']);
				
		}
	
	
	
	}
	
	return $query;
	
}



}