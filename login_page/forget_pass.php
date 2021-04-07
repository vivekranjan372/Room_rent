<?php
   session_start();
  if(isset($_POST['submit']))
  {
    include('config.php');
    $email=$_POST['email'];
   
    $qry="select * from userregistration where email='$email'";
    $res=mysqli_query($con,$qry);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
      $otp=rand(100000,999999);
  mysqli_query($con,"update userregistration set otp='$otp' where email='$email'");
  $html="Your  verification code is: ".$otp;
  $_SESSION['email_otp']=$email;
  
    }
    else
  {
    echo "<script>alert('your email is not registered');
       window.open('register.php','_self');
    </script>";
  }

  $subject="Email verification (ARCIAS)";
$msg= "<h3>This is verification Regarding  forget password</h3> <br>"; 
$headers = "From:ARCIAS | ROOM SERVICE<vivekranjan372@gmail.com>";
        

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
$mail->addAddress('$email', 'user');     // Add a recipient
$mail->addAddress('$email');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
$mail->addBCC('vivekranjan372@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $msg."".$html;
$mail->AltBody = $headers;

if(!$mail->send()) {
 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
echo ".<script>alert('Data is not inserted');</script>";

}
else
{

echo ".<script>alert('please check email for verification:');</script>";
echo "<script>window.location = 'forget_otp.php';</script>";
}
  }
  

 ?>  

<!DOCTYPE html>
<html>
<head>
	<title>login index</title>
	     
	     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<style >
	        body{
        padding-top:4.2rem;
		padding-bottom:4.2rem;
		background:rgba(0, 0, 0, 0.76);
        }
        a{
         text-decoration:none !important;
         }
         h1,h2,h3{
         font-family: 'Kaushan Script', cursive;
         }
          .myform{
		position: relative;
		display: -ms-flexbox;
		display: flex;
		padding: 1rem;
		-ms-flex-direction: column;
		flex-direction: column;
		width: 100%;
		pointer-events: auto;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0,0,0,.2);
		border-radius: 1.1rem;
		outline: 0;
		max-width: 500px;
		 }
         .tx-tfm{
         text-transform:uppercase;
         }
         .mybtn{
         border-radius:50px;
         }
        
         .login-or {
         position: relative;
         color: #aaa;
         margin-top: 10px;
         margin-bottom: 10px;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .span-or {
         display: block;
         position: absolute;
         left: 50%;
         top: -2px;
         margin-left: -25px;
         background-color: #fff;
         width: 50px;
         text-align: center;
         }
         .hr-or {
         height: 1px;
         margin-top: 0px !important;
         margin-bottom: 0px !important;
         }
         .google {
         color:#666;
         width:100%;
         height:40px;
         text-align:center;
         outline:none;
         border: 1px solid lightgrey;
         }
          form .error {
         color: #ff0000;
         }
      
</style>

<body >
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center" style="margin:20px 0px;">
							<h1>ARCIAS</h1>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                             <div class="form-group" style="margin:20px 0px;">
                              <h3 class="text-center">Verify Your Identity</h3>
                           </div>
                           <div class="form-group" style="margin:40px 0px;">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                           </div>
                           
                           <div class="form-group" style="margin:40px 0px;">
                              <p class="text-center">We 'll Sent you a Verification code to your Email <br><a href="#">Terms Of Use</a></p>
                           </div>
                           
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Submit</button>
                           </div>
                           
                           
                           
                        </form>

  				</div>
			</div>
    </div>
  </div>
</div>
			
</body>
</html>
