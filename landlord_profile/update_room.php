<?php 
session_start();
?>

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
          <div><h3 class="btn btn-primary" align="center" style="margin-left:270px; font-size:30px;">Update your Room Details:-</h3></div>
           <form  method="post"  style="margin-left:25px; margin-top:40px;" enctype="multipart/form-data">
            <div class="form-group">
             <label> Room Number:</label>
             <input class="form-control" style="width:50%;" type="text"name="room_number" placeholder="Enter Room number For Update" />
             
                </div>
                <div style="margin-top:30px;">
                  <button class="btn btn-primary" name="submit">Submit </button>
                </div>
                <table  align="center"  border="3" style="margin-right:100px; margin-top:25px; width:50%;" >
                  <?php

 
 if(isset($_POST['submit']))

   {
    include('config.php');
    $room_number=$_POST['room_number'];
    $qry="select * from room_info where room_number='$room_number'";
    $res=mysqli_query($con,$qry);

   
   

 ?>
      
      <tr>
        <th>Serial Number</th>
          <th>Room Number</th>
  
            <th>Room Type</th>
            <th>Room Address</th>
            <th>Contact Number</th>
            <th>Room Image</th>
           
            
           
             
       </tr>
       <?php 
       if($num=mysqli_num_rows($res)<1)
   {
      echo "<table align='center' style='margin-top:30px; margin-left:350px;'><tr><td><h4>No such Room Number Found! </h4></td></tr></table>";

   }
   
          $count=0;
         while($result=mysqli_fetch_assoc($res))
         {

            $count++;
          
         ?>
      
       <tr>
             <td><?php  echo $count; ?></td>
         <td><input name="room_number" value="<?php echo $result['room_number'] ;?>"/></td>
         <td >
            <select name="room_type">
              <option>Select option</option>
            <option>Single Beded Room</option>
                   <option>Double Beded Room</option>
                   <option>three Beded Room</option>
                   <option>More than three</option>
                 </select>       
                </td>
           <td><input name="room_location" value="<?php echo $result['room_location']; ?>"/></td>
         <td><input name="cont_number"value ="<?php echo $result['cont_number']; ?>"/></td>
         
         
         <td><input type="file" name="img"/></td>
        
       </tr>
     
       <?php 
        $_SESSION['room_number']=$result['room_number'];  
      }
      
     ?>
       
  </table>
    <div style="margin-top:30px;">
                  <button class="btn btn-primary" name="update">Update </button>
                </div>   
    
           </form>
</div>
</div>
<div>
<?php
 }
      
if(isset($_POST['update']) && !empty($_POST['update']))
{     
      include('config.php');
    $prev_number=$_SESSION['room_number'];
    $room_number=$_POST['room_number'];
    $room_type=$_POST['room_type'];
    $room_location=$_POST['room_location'];
    $cont_number=$_POST['cont_number'];
    $room_image=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"image/$room_image");

  $qy="update room_info set room_number='$room_number',room_type='$room_type',room_location='$room_location',cont_number='$cont_number',room_image='$room_image' where room_number='$prev_number'";
  $res1=mysqli_query($con,$qy);
  if($res1==true)
  {
    echo "<script>alert('Room Details have Updated Succesfully')</script> ";
  }
  header("Refresh:0; url=room_details.php");

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