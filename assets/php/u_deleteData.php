<?php 
require_once('db_connect.php');
extract($_POST);

$delete = $conn->query("DELETE FROM `podms_users` where id = '{$id}'");
if($delete){
    $resp['status'] = 'success';
    $resp['msg'] = 'Successfully deleted';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);