<?php 

include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}

if (isset($_POST['updateViol'])) {
    $viol = mysqli_real_escape_string($conn, $_POST['viol']);
    $new = mysqli_real_escape_string($conn, $_POST['updated_value']);
    
    // if ($id == NULL || $date == NULL || $time == NULL) {
    //     $res = [
    //         'status' => 422,
    //         'message' => 'All fields are mandatory'
    //     ];
    //     echo json_encode($res);
    //     return;
    // }

    $query1 = "UPDATE `podms_violation` SET `viol_name` = '$new' WHERE `id` = '$viol'";
    $query_run1 = mysqli_query($conn, $query1);

    if ($query_run1) {
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