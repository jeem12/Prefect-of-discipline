<?php 
require_once('db_connect.php');
extract($_POST);


     $duties = implode(', ', $_POST['duties']);
     //$file = file_get_contents($_FILES["image"]["tmp_name"]);, `image` = '$file'




$update = $conn->query("UPDATE `podms_profiling` SET `violation_level` = '{$level}' , `violation`='{$viol}' , `duty_start`='{$duty_timeS}', `duty_end` = '{$duty_timeE}', `duties` = '$duties', `duty_location` = '{$dutyLoc}', `status` = '3'   WHERE id='{$id}'");




if($update){

  // $update2 = $conn->query("INSERT INTO `podms_duty` SELECT * FROM `podms_profiling` WHERE `id` = '$id'");

  // if($update2){

  //   $update3 = $conn->query("DELETE FROM podms_profiling WHERE `id` = '$id'");

  //   if($update3){
  //       $resp['status'] = 'success';
  //       $resp['msg'] = 'Successfully updated';
  //   }else{
  //     $resp['status'] = 'failed';
  //     $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
  //   }
  // }else {
  //   $resp['status'] = 'failed';
  //   $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
  // }
    $resp['status'] = 'success';
    $resp['msg'] = 'Successfully updated';

}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occurred while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);