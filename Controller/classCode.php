<?php
    
    /*
     *
     * DEBUG ONLY
     *
     */
    $_GET["call"] = 16806;
    $_GET["prof"] = "CORNISH, VIRGINIA W";
    $_GET["term"] = 20133;
    $_GET["number"] = "CHEM3443";
    
    ////end debug
    
    
    include('Model/mixedAPI.php');
    $api = new mixedAPI();
    
    if(isset($_GET["call"]))
	$call = $_GET["call"];
    else
	die();
    if(isset($_GET["prof"]))
	$prof = $_GET["prof"];
    else
	die();
    if(isset($_GET["term"]))
	$term = $_GET["term"];
    else
	die();
    if(isset($_GET["number"]))
	$classNumber = $_GET["number"];
    else
	die();
    
    
    
    $result = $api->getClassesByCallAndProfessorAndTerm($call,$prof,$term,10);
    //$reviews = $api->getReviewsByClassNumberAndProfeesor($classNumber,$prof);
    
   // var_dump($reviews);
    ?>