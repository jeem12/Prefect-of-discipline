<?php

// INCLUDE YOUR DATABASE CONNECTION
include ("db_connect.php");

if(isset($_POST['view'])){
   
// If user click notif icon the badge number will disappear
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
          <li class="notification-item">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
              <a href="../../../subsystem_folder/reports.php">
                <h4>'.$row["from"].'</h4>
                <p>'.$row["description"].'</p>
                <p>'.$row["date"].'</p>
                <a/>
              </div>
              </li>
              <hr class="dropdown-divider">
            ';
         }

    $output .='<li class="dropdown-footer"><a href="reports.php">Show all notifications</a></li>';

            
}else {
    $output .= 
               '<li class="notification-item-no">
                <div>
                  <h6>No new notifications</h6>
                </div>
                </li>';
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

