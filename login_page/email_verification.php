<?php
  session_start();
if(isset($_POST['submit']))
{
   include('config.php');

$otp=$_POST['otp'];
$email=$_SESSION['email_regi'];
$res=mysqli_query($con,"select * from userregistration where email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0)
{
    echo "<script>
    alert('your email is verified, Now you can login');
    window.open('login.php','_self');
    
   </script>";
}
else
{
    echo "<script>
    alert('Otp did not match');
    window.open('email_verification.php','_self');</script>";
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
                              <h2 class="text-center">Code Sent</h2>
                           </div>
                           <div class="form-group" style="margin:40px 0px; font-size:14px;">
                              <p class="text-center" >A verification code has sent to your Registered Email address<br><div class="form-group text-center">Enter the Code below to create a new Account</div></p>
                           </div>
                           <div class="form-group" style="margin:40px 0px;">
                              <label for="exampleInputEmail1">Verification Code</label>
                              <input type="text" name="otp"  class="form-control" id="otp" aria-describedby="otpsubmit" placeholder="Enter 6-digit code to verify" required>
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
