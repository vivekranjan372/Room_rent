<?php
date_default_timezone_set("Asia/Kolkata");
include_once("config.php");
if(isset($_POST['submit']))
{

$email=$_POST['email'];

$status=0;
$activationcode=md5($email.time());
$query="insert into userregistration(email,activationcode,status) values($email','$activationcode','$status')";
$res=mysqli_query($con,$query);

	if($res)
	{
$to=$email;
$msg= "Thanks for new Registration.";   
$subject="Email verification (ARCIAS)";
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:ARCIAS | ROOM SERVICE<vivekranjan372@gmail.com>'."\r\n";
        
$ms.="<html></body><div><div><h2>Dear user,</h2></div></br></br>";
$ms.="<div style='padding-top:8px;'><h3>Please click The below link For verifying and activation of your account</h3></div>
<div style='padding-top:30px';'margin-left:50px;'; ><a href='http://localhost/listed/mail/email_verification.php?code=$activationcode' ><h1>Click Here</h1></a></div>
</div>
</body></html>";

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vivekranjan372@gmail.com';                 // SMTP username
$mail->Password = 'pawan25524';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('vivekranjan372@gmail.com', 'vivek ranjan');
$mail->addAddress('$to', 'user');     // Add a recipient
$mail->addAddress('$to');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
$mail->addBCC('vivekranjan372@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $ms;
$mail->AltBody = $headers;

if(!$mail->send()) {
 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
echo ".<script>alert('Data is not inserted');</script>";

}
else
{

echo ".<script>alert('Registration successful, please verify your registered Email-Id');</script>";
echo "<script>window.location = '../login.php';</script>";;
}
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CodeWithSuneja | PHP Email Verification Script </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<div class="container-fluid">
  
      
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Email Verification  </h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">

  <tr>
    <th height="62" scope="row">Email id </th>
    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required /></td>
  </tr>
  
 <tr>
    <th height="62" scope="row"></th>
    <td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
  </tr>
</table>
 </form>
 
      </div>
    </div>
  
        
   
  </div><!--/center-->

</div><!--/container-fluid-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>