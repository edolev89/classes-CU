  <?php
define ("F_DEBUG_MODE", false);

class classesAPI
{	
	private $api_server_url;
	private $auth_params;

	public function __construct($api_key)
	{
		$this->api_server_url = "http://data.adicu.com/";
    	$this->auth_params = array();
   		$this->auth_params['api_token'] = $api_key;

	}
	
	//////////////////////////////////////////////////////////
	// public mathods
	//////////////////////////////////////////////////////////
	
	public function getClassesByProfessor($person_name,$limit) 
	{
		return $this->call("courses", array("professor" => $person_name, "limit" => $limit ));
	}
	
	public function getClassesByDepartment($department,$limit) 
	{
		return $this->call("courses/v2/", array("department" => $department, "limit" => $limit ));
	}
	
	public function getClassesByTitle($title,$limit)
	{
		return $this->call("courses/v2/courses", array("title" => $title, "limit" => $limit ));
	}
	
	public function getClassesByID($id,$limit)
	{
		return $this->call("courses/v2/courses", array("course" => $id, "limit" => $limit ));
	}
	
	public function getSectionsByCourse($id,$limit,$term)
	{
		return $this->call("courses/v2/sections", array("course" => $id, "limit" => $limit ,"term" => $term ));
	}
	
	public function getSectionByCall($call,$limit,$term)
	{
		return $this->call("courses/v2/sections", array("call_number" => $call, "limit" => $limit ,"term" => $term ));
	}
	
	
	//////////////////////////////////////////////////////////
	// private mathods
	//////////////////////////////////////////////////////////
	
    protected function call($method, $params = array())
    {
 
    	$params["pretty"] = "true";
    	
    	$params = array_merge($this->auth_params, $params);
		$url = $this->api_server_url . "$method?".http_build_query($params);
		
		if (F_DEBUG_MODE)
		{
			echo "REQUEST: $url" . "\n";
		}
		
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     	$data = curl_exec($ch);
    	curl_close($ch);    
    	
		$result = null;
		if (!empty($data))
		{
			if (F_DEBUG_MODE)
			{
				echo "RETURN: " . $data . "\n";
			}
			$result = json_decode($data);
		}
		
		if($result->status_code !="200")
				echo "error, status code: ".$result->status_code;
		
		return $result->data;

    }
}
?>