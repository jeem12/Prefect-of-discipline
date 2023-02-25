<?php
include ("db_connect.php");
if(isset($_POST['view'])){
// $conn = mysqli_connnect("localhost", "root", "", "notif");
if($_POST["view"] != '')
{
   $update_query = "UPDATE `podms_reports` SET `status` = 1 WHERE `status`= 0";
   mysqli_query($conn, $update_query);
}
$query = "SELECT * FROM `podms_reports` ORDER BY `id` DESC LIMIT 5";
$result = mysqli_query($conn, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
  $output .= '
  <li>
  <a href="#">
  <strong>'.$row["description"].'</strong><br/>
  <small><em>'.$row["content"].'</em></small>
  </a>
  </li>
  ';
}
}
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
}
$status_query = "SELECT * FROM `podms_reports` WHERE `status` = 0";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
echo json_encode($data);
}