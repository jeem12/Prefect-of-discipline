<?php

// INCLUDE YOUR DATABASE CONNECTION
include ("db_connect.php");

if(isset($_POST['view'])){
   
// If user click notif icon the badge number will disappear
if($_POST["view"] != '')
{
   $update_query = "UPDATE `podms_sp_appointment` SET `status` = 0 WHERE `status`= 1";
   mysqli_query($conn, $update_query);
}



$status_query = "SELECT * FROM `podms_sp_appointment` WHERE `status` = 1";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
   'unseen_notification'  => $count
);
echo json_encode($data);
}


