<?php 
require_once('db_connect.php');
extract($_POST);

            $update = ("DELETE FROM `podms_stud_act` WHERE `id` = '{$id}'");
            $query_run = mysqli_query($conn, $update);
                if($query_run){
                    $resp['status'] = 'success';
                    $resp['msg'] = 'Claimed the items successfully';
                }else{
                    $resp['status'] = 'failed';
                    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
                }

echo json_encode($resp);



