<?php
// INCLUDE YOUR DATABASE CONNECTION
include ("db_connect.php");

if(isset($_POST['view'])){
    $query = "SELECT * FROM `podms_events` WHERE `start` = CURDATE() AND `notif_status` = 1";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0)
    {

        // Set notif_status of the selected schedule to 0 to prevent additional notifications
        $query_update = "UPDATE `podms_events` SET `notif_status` = 2 WHERE `notif_status`= 1";
        mysqli_query($conn, $query_update);

        if($query_update){
            $query_insert = "INSERT INTO `podms_notif` (`name`, `message`, `notif_status`) VALUES ('You have a pending schedule today!', 'Please check your schedule', 1)";
            mysqli_query($conn, $query_insert);
        }




    }

    }