<?php 
include('../connection/config.php');
include('../classes/user.php');
$user = new User($db);
//logout
$user->logout(); 
//logged in return to index page
header('Location: ../login');
exit;
?>