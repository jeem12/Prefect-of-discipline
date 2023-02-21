<?php 

include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}

if (isset($_POST['appointData'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $desc = mysqli_real_escape_string($conn, $_POST['text']);

    
    

    if ($id == NULL || $date == NULL || $time == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query1 = "UPDATE `podms_sp_appointment` SET `start` = '$date' ,  `end` = '$date',`time`='$time', `title` = '$title', `description` = '$desc'  WHERE `id` = '$id'";
    $query_run1 = mysqli_query($conn, $query1);

    if ($query_run1) {

        $query2 = "INSERT INTO `podms_events` SELECT * FROM `podms_sp_appointment` WHERE `id` = '$id'";
        $query_run2 = mysqli_query($conn, $query2);

        if ($query_run2) {
            $query3 = "DELETE FROM `podms_sp_appointment` WHERE `id` = '$id'";
            $query_run3 = mysqli_query($conn, $query3);

            if ($query_run3) {
                $res = [
                    'status' => 200,
        
                    'message' => 'Appointment Added'
        
                ];
                echo json_encode($res);
                return;
            }else {
                $res = [
                    'status' => 500,
        
                    'message' => 'Appointment Failed',
        
        
                ];
                echo json_encode($res);
                return;
            }
        }

        
    }
}