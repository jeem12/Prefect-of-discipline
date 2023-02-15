<?php 
require_once('db_connect.php');
extract($_POST);

$update = $conn->query("UPDATE `podms_violation` set `viol_name` = '{$viol_name}', `viol_first_off` = '{$first_off}', `viol_sec_off` = '{$second_off}',`viol_third_off` = '{$third_off}' where id = '{$id}'");
if($update){
    $resp['status'] = 'success';
    $resp['msg'] = 'Successfully updated';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);