<?php 
require_once('db_connect.php');
extract($_POST);

$update = ("UPDATE `podms_duty` SET `status` = 3 WHERE `id` = '{$id}'");
$query_run = mysqli_query($conn, $update);
if ($query_run){

    $update2 = ("INSERT INTO `podms_records` SELECT * FROM `podms_duty` WHERE `id` = '{$id}'");
    $query_run2 = mysqli_query($conn, $update2);

    if($query_run2){
        
            $update3 = ("DELETE FROM `podms_duty` WHERE `id` = '{$id}'");
            $query_run3 = mysqli_query($conn, $update3);
                if($query_run3){
                    $resp['status'] = 'success';
                    $resp['msg'] = 'Successfully updated';
                }else{
                    $resp['status'] = 'failed';
                    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
                }

    }

}

echo json_encode($resp);