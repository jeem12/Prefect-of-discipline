<?php 
require_once('db_connect.php');
extract($_POST);

$query = $conn->query("INSERT INTO `podms_violation` (`viol_name`,`viol_first_off`,`viol_sec_off`,`viol_third_off`) VALUE ('{$viol_name}','{$first_off}','{$second_off}','{$third_off}')");
if($query){
    $resp['status'] = 'success';
    $resp['msg'] = 'Successfully Added';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);