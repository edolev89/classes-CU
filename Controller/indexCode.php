<?php
include('Model/mixedAPI.php');

// Point to where you downloaded the phar

$api = new mixedAPI();

//$result = $api->getClassesByID("COMS3157", $limit);
//$result = $api->getTopProfessors(10);
$topClasses = $api->getTopClasses(10);
$topProfessors = $api->getTopProfessors(10);
$easyAClasses = $api->getEasyAClasses(10);

//$result = $api->getClassesByTitle("Discrete Mathematics");
//print_r($result);











?>