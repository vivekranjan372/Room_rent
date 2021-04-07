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
$email=$_SESSION['email'];
$query="select  * from room_info where email='$email';";
$res1=mysqli_query($con,$query);
$result1=mysqli_fetch_array($res1);
    



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
     <?php   include('sidebar.php') ;?>
           
           
            <div class=" col-sm-8" >
             <div><h3 class="btn btn-primary" align="center" style="margin-left:270px; font-size:30px;">Update your Profile:-</h3></div>
              <form method="post" action=""  style="margin-left:300px; margin-top:40px;">
                <div class="form-group">
                  <label for ="inputEmail">Email:</label>
                  <input class="form-control" type="email" value="<?php echo $result['email'] ?>"name="email" readonly />
                  
                </div>
                <div class="form-group">
                    <label for="inputName">Name:</label>
                  <input class="form-control"type="text" name="name" value="<?php echo $result['name']; ?>" placeholder="Update Name"  /> </div>
                   <div class="form-group">
                    <label for="inputName">Mobile Number:</label>
                  <input class="form-control"type="text" name="cont_number" value="<?php echo $result1['cont_number']; ?>" placeholder="Update Mobile Number"  /> </div>
                  <div>
                  <button class="btn btn-primary" name="submit" type="submit" style="margin-top:35px;" >Update</button></div>
               
              </form>
              </div>
            </div>
          </div>

<?php 

 if(isset($_POST['submit']))
 {
  $name=$_POST['name'];
  $cont_number=$_POST['cont_number'];
  $q1="update userregistration set name='$name' where id='$id'";
  $res1=mysqli_query($con,$q1);
  $q2="update room_info set cont_number='$cont_number' where email='$email'";
  $res2=mysqli_query($con,$q2);
  if(($res1 && $res2)==true)
  {
    echo "<script>alert('profile is successfully updated');
    
    </script>";
  }
  header("Refresh:0");
 }
?>
  

        
            
       

      

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