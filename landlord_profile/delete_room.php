<?php
session_start();
include('config.php');

$delete=$_GET['delete'];
$qry="delete from room_info where room_number='$delete'";
$res=mysqli_query($con,$qry);

if($res==true)
{
	
	echo"<script>alert('Room is Removed Successfully ');
        window.open('upload_room.php','_self');
	</script>";
	 
}


?>
