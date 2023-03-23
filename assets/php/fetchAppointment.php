<?php

// INCLUDE YOUR DATABASE CONNECTION
include ("db_connect.php");

if(isset($_POST['view'])){

   $query = "SELECT * FROM `podms_sp_appointment` WHERE`notif_status` = 1";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0)
    {

        // Set notif_status of the selected schedule to 0 to prevent additional notifications
        $query_update = "UPDATE `podms_sp_appointment` SET `notif_status` = 2 WHERE `notif_status`= 1";
        mysqli_query($conn, $query_update);

        if($query_update){
            $query_insert = "INSERT INTO `podms_notif` (`name`, `message`, `notif_status`,`link`) VALUES ('You have a pending appointments', 'Please check your appointment and give them a schedule', 1, '../../../subsystem_folder/appointment.php')";
            mysqli_query($conn, $query_insert);
        }




    }
   
      
}


