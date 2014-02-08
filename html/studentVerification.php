<?
print studentVerification("ajp2@columbia.edu");

/**
	Returns 1 if $email parameter is for a student.
	returns 0 otherwise
*/
function studentVerification ($email) {
	$loginfields = "filter.searchTerm=$email";
	//$useragent=â€Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)â€;
	$ch = curl_init();

	$url = "https://directory.columbia.edu/people/search";
	curl_setopt($ch, CURLOPT_URL,$url); //set the url we want to use
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $loginfields);
	$haystack = curl_exec ($ch); //execute and get the results
	curl_close ($ch);

	$titlePos = strpos($haystack, "Title:");
	$studentPos = strpos($haystack, "Student,", $titlePos);
	if(($studentPos) && ($studentPos < $titlePos + 30)) {
		return 1;
	}
	return false;
}

?>