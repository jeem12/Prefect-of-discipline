<?php 
require_once('db_connect.php');
extract($_POST);

$delete = $conn->query("DELETE FROM `podms_violation` where id = '{$id}'");
if($delete){
    $resp['status'] = 'success';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);