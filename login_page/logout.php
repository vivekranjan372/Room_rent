<?php  
session_start();  
include('connection.php');
$google_client->revokeToken();
session_destroy();
header('location:../index.html');




?>