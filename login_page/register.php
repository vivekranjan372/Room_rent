
<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
include_once("config.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$con_pass=md5($_POST['confirm_password']);
$otp_="000000";

$qry="select * from userregistration where  email='$email';";
$res=mysqli_query($con,$qry);
$num=mysqli_num_rows($res);
if($num>0)
{
  ?>
<script>
alert('you are already registered !  Please login');
window.open('login.php','_self');
</script>
  <?php
}

else
{  

$query="insert into userregistration(name,email,password,confirm_password,otp) values('$name','$email','$password','$con_pass','$otp_')";
   mysqli_query($con,$query);
  $_SESSION['email_regi']=$email;
}
  $otp=rand(100000,999999);
  $qry="update userregistration set otp='$otp' where email='$email';";
  $res1=mysqli_query($con,$qry);
   $html="your verification code is : ".$otp;


 if($res1==true)
  {
$to=$email;
$msg= "<h3>Thanks for new Registration </h3> <br>";   
$subject="Email verification (ARCIAS)";

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
$mail->addAddress('$to', 'user');     // Add a recipient
$mail->addAddress('$to');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
$mail->addBCC('vivekranjan372@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $msg."<br>".$html;
$mail->AltBody = $headers;

if(!$mail->send()) {
 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
echo ".<script>alert('Data is not inserted');</script>";

}
else
{


echo "<script>window.location = 'email_forward.php';</script>";
}
}
}
    


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign index</title>
       
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
<body>
    <script type="text/javascript">
  function val(){
     var user=document.getElementById("uname").value;
  var pass=document.getElementById("pass").value;
  var con_pass=document.getElementById("con_pass").value;
  if(user==""||pass==""||con_pass=="")
  {
    document.getElementById("show_result").innerHTML="Empty is not allowed";
    return false;
  }
  else if(pass!=con_pass)
  {
    document.getElementById("show_result").innerHTML="Password is not matched";
    return false;
  
  }
  
}


      </script>
  <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
  <div id="second" >
            <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="" name="registration" method ="post" onsubmit="return val()">
                           <div class="form-group">
                              <label for="exampleInputEmail1"> Name</label>
                              <input type="text"  name="name" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="Enter name" >
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" >
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password"  class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter password">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Repeat password</label>
                              <input type="password" name="confirm_password" id="con_pass"  class="form-control" aria-describedby="emailHelp" placeholder="Confirm Password">
                           </div>
                           <div id="show_result" style="color:red;"></div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            </div>
                        </form>
                     </div>
      </div>
    </div>
      </div>  
      <div> 
         
</body>
</html>
   
   



