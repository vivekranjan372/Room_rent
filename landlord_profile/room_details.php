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
   include('config.php');
    $email=$_SESSION['email'];
   
$qry="select * from room_info where email='$email'";
$res=mysqli_query($con,$qry);
$total_room=$_SESSION['value'];


  
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
     <?php  include('sidebar.php'); ?>

    <div class="col-sm-9">
     
      <form class="form-group" align="center" method="post">
        <div  align="center"style="margin-left:70px;">
      <label class="btn btn-primary" style="font-size:20px; ">Total Rooms:-</label>
       <label class="btn btn-primary" style="margin-left:15px; font-size:20px; width:25%;"><?php echo $total_room; ?></label>
     </div>
      <div>
     <table  align="center" width="10%" border="3" style="margin:45px 100px; max-width:20%; ">
      
      <tr>
          <th>Room Number</th>
  
            <th>Room Type</th>
            <th>Room Address</th>
            <th>Contact Number</th>
            <th>Email </th>
            <th>Room Image</th>
            <th>Delete Room</th>
            
           
             
       </tr>
       <?php 
        
         while($result=mysqli_fetch_assoc($res))
         {


       ?>
       <tr>
         <td><?php echo $result['room_number'] ;?></td>
         <td><?php echo $result['room_type']; ?></td>
           <td><?php echo $result['room_location']; ?></td>
         <td><?php echo $result['cont_number']; ?></td>
         
         <td><?php  echo $result['email']; ?></td>
         <td> <img src="image/<?php echo $result['room_image'] ?>" style="max-width:150px;"/></td>
         <td><button  name="delete"class="btn btn-primary"><a href="delete_room.php ?delete=<?php echo $result['room_number'] ;?>" style="color:white;">Delete</a></button></td>

       </tr>
          
    
       <?php 
     }
         
     ?>

  </table>
</div>
    </form>
    </div>
     </div>
      </div>




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