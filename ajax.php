<?php
include('DB.php');


$db=  new DB();

echo('hello');
echo($_POST['helpfulness']);
echo($_POST['clarity']);
echo($_POST['easiness']);
echo($_POST['knowledge']);
echo($_POST['words']);
echo($_POST['workLoad']);



    $db->addUser($user_profile['id'], $user_profile['first_name'], $user_profile['last_name'], $user_profile['email']);

?>
