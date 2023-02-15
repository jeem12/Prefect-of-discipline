<?php 
require_once('db_connect.php');
extract($_POST);

$query = $conn->query ("INSERT INTO `podms_profiling` (`id_number`,`first_name`,`middle_name`,`last_name`,`course`,`inci_desc`,`inci_date`,`inci_time`,`status`) VALUES ('{$idNum}','{$fname}','{$mname}','{$lname}','{$course}','{$inci_desc}','{$inci_date}','{$inci_time}','1')");

if($query){
    $resp['status'] = 'success';
    $resp['msg'] = 'Successfully Added';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);




