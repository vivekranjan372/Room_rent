<?php 
require 'vendor/autoload.php';
$google_client=new Google_Client();
$google_client->setClientId('412663533885-mnkbflhnodvqrpqb7uhop1n3fjsj8mgn.apps.googleusercontent.com');
$google_client->setClientSecret('IAIjlBygsniI-U1n0efyGvx7');
$google_client->setRedirectUri('http://localhost/listed/login_page/welcome.php');
$google_client->addScope('email');
$google_client->addScope('profile');



?>

