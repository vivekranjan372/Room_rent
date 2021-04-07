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
              <div><h3 class="btn btn-primary" align="center" style="margin-left:270px; font-size:30px;">Upload Room Details:-</h3></div>
              <form method="post"  style="margin-left:300px; margin-top:40px;" enctype="multipart/form-data" action="upload_room.php">
                <div class="form-control" >
                                  <label for="contact_number">Room Number*:-</label>
                                  <input class="form-control" name="room_number" placeholder="Enter Room Number" required/>   

                  <div>
                <div class="form-control"  style="margin:30px 0px;">
                  <label for ="inputroom_type" align="center">Room Type*:-</label>
                 <select class="form-control"  name="room_type"required>
                   <option>Select Room</option>
                   <option>Single Beded Room</option>
                   <option>Double Beded Room</option>
                   <option>three Beded Room</option>
                   <option>More than three</option>
                 </select>
                  
                </div>
                <div class="form-control"  style="margin:30px 0px;">
                    <label for="inputName" align="center">Room Description*:-</label>
                   
                                        <textarea class="form-control"  name="message" placeholder="Describe about your room" rows="2" required data-error="Write your message" ></textarea>
                                </div> 
                                <div class="form-control">
                                  <label for="room_location">Room Address*:-</label>
                                  <input class="form-control" name="room_location" placeholder="Enter address of the room"  required/>
                                  
                                </div>       
                         <div class="form-control" style="margin:30px 0px;" >
                          <label for="image_upload" align="center">Upload Room Image*:-</label>
                          
                         <input type="file" name="room_image[]" multiple="multiple" required>
                           
                         </div> 
                         <div class="form-control" style="margin-bottom:20px;">
                                  <label for="contact_number">Room Price*:-</label>
                                  <input class="form-control" name="room_price" placeholder="Enter Renting Price" required/>   
                                           </div>
                         <div class="form-control" style="margin:30px 0px;">
                                  <label for="contact_number">Contact Number*:-</label>
                                  <input class="form-control" name="cont_number" placeholder="Enter Mobile Number" reuired/>   

                  <div>
                  <input class="btn btn-primary" name="submit" type="submit" style="margin-top:35px;" value="Upload Details" /> </div>
                
              </form>
              </div>
            </div>
          </div>

  <?php 
   include('config.php');
  
   if(isset($_POST['submit']))
   {    
    
    $room_number=$_POST['room_number'];
    $room_type=$_POST['room_type'];
    $message=$_POST['message'];
    $room_location=$_POST['room_location'];
    $upload_image=$_FILES['room_image']['name'];
    $tempname=$_FILES['room_image']['tmp_name'];
    $price=$_POST['room_price'];
    $cont_number=$_POST['cont_number'];
    $email=$_SESSION['email'];
    $count=count($tempname);
        $query="select * from room_info where room_number='$room_number' ";
        $res2=mysqli_query($con,$query);
        $num=mysqli_num_rows($res2);
        if($num>1)
        {
          echo "<script>alert('The Room number You have entered , is already exit')</script>";
        }


        else
        {
    for($i=0;$i<$count;$i++)
    {
      $filename=$upload_image[$i];
      $tmp=$tempname[$i];
   
      
    move_uploaded_file($tmp,"image/$filename");
      
    $qry="insert into room_info(room_number,room_type,room_desc,room_location,room_image,room_price,cont_number,email) values('$room_number','$room_type','$message','$room_location','$filename','$price','$cont_number','$email')";
    $res=mysqli_query($con,$qry);
     }
    if($res==true)
    {
      echo "<script>alert(' Room Details have uploaded sucessfully')</script>";
     
    }
    else
    {
      echo "<script>alert('Room Details has not uploaded');</script>";
    
    }
    

   }
}     
  
 $email=$_SESSION['email'];
$qry="select * from room_info where email='$email'";
$res1=mysqli_query($con,$qry);
$count1=0;
while($fetch=mysqli_fetch_array($res1))
{
    $data=$fetch['email'];
    $count1++;
}
$_SESSION['value']=$count1;
 


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