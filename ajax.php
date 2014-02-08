<?php
include('DB.php');


$db=  new DB();

echo('hello');
echo($_POST['courseNumber']);
echo($_POST['courseName']);
echo($_POST['profFirst']);
echo($_POST['profLast']);
echo($_POST['workLoad']);
echo($_POST['helpfulness']);
echo($_POST['clarity']);
echo($_POST['easiness']);
echo($_POST['knowledge']);
echo($_POST['words']);




    $db->addUser($user_profile['id'], $user_profile['first_name'], $user_profile['last_name'], $user_profile['email']);

?>
