<?php 
include('connection.php');
session_start();

$login_button='';
if(isset($_GET['code']))
{
	$token=$google_client->fetchAccessTokenWithAuthCode($_GET['code']) ;

	if(!isset($token['error']))
	{
		$google_client->setAccessToken($token['access_token']);
		$_SESSION['access_token']=$token['access_token'];
		$google_service= new Google_Service_Oauth2($google_client);
		$data=$google_service->userinfo->get();
        
		if(!empty($data['id']))
		{
			$_SESSION['id']=$data['id'];
		}
		if(!empty($data['given_name']))
		{
			$_SESSION['user_first_name']=$data['given_name'];
		}
		if(!empty($data['sur_name']))
		{
			$_SESSION['user_last_name']=$data['sur_name'];
		}
		if(!empty($data['email']))
		{
			$_SESSION['user_mail']=$data['email'];
		}
		if(!empty($data['gender']))
		{
			$_SESSION['user_gender']=$data['gender'];
		}
		if(!empty($data['picture']))
		{
			$_SESSION['picture']=$data['picture'];
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2 align="center">Google login</h2>
<p align ="center">click below for Login through Google</p>
<?php 
if($login_button==''){
	 
				
			header('location:../landlord_profile/dashboard.php');

}
else
{
	echo '<div align="center">'.$login_button.'
	</div>';

}
?>
</body>
</html>