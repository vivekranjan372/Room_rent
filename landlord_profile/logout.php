<?php

include('../login_page/logout.php');
include('config.php');
session_destroy();
header('location:../room.php');

?>
