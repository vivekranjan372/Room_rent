<?php 
session_start();
   if(isset($_POST['submit']))
   {
      include('config.php');
      $email=$_SESSION['email_otp'];
      $pass=md5($_POST['pass']);
      $con_pass=md5($_POST['con_pass']);
      $qry="update userregistration set password='$pass',confirm_password='$con_pass' where email='$email'";
      $res=mysqli_query($con,$qry);
      if($res==true)
      {
        echo "<script>alert('your Password is successfully updated');
           window.open('login.php','_self');
        </script>";
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
  
  <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
  <div id="second" >
            <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center "style="margin-top:25px;" >
                              <h1 >Setup New Password</h1>
                           </div>
                        </div>
                      <div class="form-group" style=" font-size:20px; margin-top:35px;">
                              <h3 class="text-center" >Congrats, your email has verified</h3>
                           </div>
                        <form action="" name="registration" method ="post" onsubmit="return val()">
                          
                           <div class="form-group" style="margin:20px 0px;">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email"  name="email" class="form-control" id="email" value="<?php echo $_SESSION['email_otp'];?>" aria-describedby="emailHelp"  readonly >
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="pass"  class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter new password">
                           </div>
                           <div class="form-group" style="margin:40px 0px;">
                              <label for="exampleInputEmail1">Confirm password</label>
                              <input type="password" name="con_pass" id="con_pass"  class="form-control" aria-describedby="emailHelp" placeholder="Confirm  new password">
                           </div>
                           
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Submit</button>
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
   
   



