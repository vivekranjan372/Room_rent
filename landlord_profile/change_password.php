<?php
session_start();

if(isset($_SESSION['name']))
{
  $_SESSION['name'];
}
else
{
  header('location:../login_page/login.php');
}

include('../login_page/config.php');

$id=$_SESSION['id'];
$qry="select * from userregistration where id='$id'";
$res=mysqli_query($con,$qry);
$result=mysqli_fetch_assoc($res);

 
?>      
<?php
 

if(isset($_POST['submit']))
{  
  $pass=$_SESSION['pass'] ;
  $pass1=md5($_POST['pass1']);
  
  $change_pass=md5($_POST['change_pass']);
  $qry="select * from userregistration where password='$pass1'";
  $res=mysqli_query($con,$qry);
  $num=mysqli_num_rows($res);
  if($num==1)

  {
     $query="update userregistration set password='$change_pass',confirm_password='$change_pass' where id='$id'";
     $update_result=mysqli_query($con,$query);
     if($update_result==true)
     {
      echo "<script>alert('Password is updated Successfully')</script>";
     }
  
  
}
else
  {
    echo "<script>alert('Entered Password is not matched')</script>";
  }
}
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Room Rent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
      <?php 
      include('sidebar.php');
    ?>
     
      
            <div class=" col-sm-8 " >
             <div><h3 class="btn btn-primary" align="center" style="margin-left:270px; font-size:30px;">Please Fill This to change Your Account Password:-</h3></div>
              <form method="post"  style="margin-left:300px; margin-top:40px;" >
                <div class="form-group">
                  <label for ="inputEmail">Email:</label>
                  <input class="form-control" type="email" value="<?php echo $result['email']; ?>" name="email" readonly />
                  
                </div>
                <div class="form-group">
                    <label for="inputName">Name:</label>
                  <input class="form-control"type="text" value="<?php echo $result['name']; ?>" name="name" readonly />
                  
                </div>
                 <div class="form-group">
                    <label for="inputName">Password:</label>
                  <input class="form-control"type="password" name="pass1" placeholder="Confirm previous password"  />
                  
                </div>
                 <div class="form-group">
                    <label for="inputName">Change Password:</label>
                  <input class="form-control"type="password" name="change_pass" placeholder="Enter new password"  />
                  
                </div>
                <div>
             
                  <button class="btn btn-primary" name="submit" type="submit" style="margin-top:35px;" >Update Password</button></div>
              </form>
              </div>
            </div>
          </div>


    
            
       

      

    <!-- END header -->

    <!-- END section -->






    <!-- END section -->

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.0.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>

    <script src="../js/main.js"></script>
  </body>

  </html>