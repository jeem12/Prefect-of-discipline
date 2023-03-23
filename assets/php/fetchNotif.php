<?php

// INCLUDE YOUR DATABASE CONNECTION
include ("db_connect.php");

if(isset($_POST['view'])){
   
// If user click notif icon the badge number will disappear
if($_POST["view"] != '')
{
   $update_query = "UPDATE `podms_notif` SET `notif_status` = 0 WHERE `notif_status`= 1";
   $updated = mysqli_query($conn, $update_query);

}


$query = "SELECT * FROM `podms_notif` ORDER BY `id` DESC LIMIT 5";
$result = mysqli_query($conn, $query);
$output = '';


if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
    {
      $output .= '
          <li class="notification-item">
              <i class="bi bi-exclamation-circle text-primary"></i>
              <div class="w-75 p-3"><a href='.$row["link"].'>
                <h4>'.$row["name"].'</h4>
                <p>'.$row["message"].'</p>
                
                <p>'.date('g:i a',strtotime($row['date'])).'</p></a>
              </div>
              </li>
              <hr class="dropdown-divider">
            ';
         }

    // $output .='<li class="dropdown-footer"><a href="reports.php">Show all notifications</a></li>';

            
}else {
    $output .= 
               '<li class="notification-item-no">
                <div>
                  <h6>No new notifications</h6>
                </div>
                </li>';
}
$status_query = "SELECT * FROM `podms_notif` WHERE `notif_status` = 1";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
echo json_encode($data);
}

