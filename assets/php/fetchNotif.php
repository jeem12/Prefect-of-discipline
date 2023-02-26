<?php

// INCLUDE YOUR DATABASE CONNECTION
include ("db_connect.php");

function time_Ago($time) {
  
  // Calculate difference between current
  // time and given timestamp in seconds
  $diff     = time() - $time;
    
  // Time difference in seconds
  $sec     = $diff;
    
  // Convert time difference in minutes
  $min     = round($diff / 60 );
    
  // Convert time difference in hours
  $hrs     = round($diff / 3600);
    
  // Convert time difference in days
  $days     = round($diff / 86400 );
    
  // Convert time difference in weeks
  $weeks     = round($diff / 604800);
    
  // Convert time difference in months
  $mnths     = round($diff / 2600640 );
    
  // Convert time difference in years
  $yrs     = round($diff / 31207680 );
    
  // Check for seconds
  if($sec <= 60) {
      echo "$sec seconds ago";
  }
    
  // Check for minutes
  else if($min <= 60) {
      if($min==1) {
          echo "one minute ago";
      }
      else {
          echo "$min minutes ago";
      }
  }
    
  // Check for hours
  else if($hrs <= 24) {
      if($hrs == 1) { 
          echo "an hour ago";
      }
      else {
          echo "$hrs hours ago";
      }
  }
    
  // Check for days
  else if($days <= 7) {
      if($days == 1) {
          echo "Yesterday";
      }
      else {
          echo "$days days ago";
      }
  }
    
  // Check for weeks
  else if($weeks <= 4.3) {
      if($weeks == 1) {
          echo "a week ago";
      }
      else {
          echo "$weeks weeks ago";
      }
  }
    
  // Check for months
  else if($mnths <= 12) {
      if($mnths == 1) {
          echo "a month ago";
      }
      else {
          echo "$mnths months ago";
      }
  }
    
  // Check for years
  else {
      if($yrs == 1) {
          echo "one year ago";
      }
      else {
          echo "$yrs years ago";
      }
  }
}



// Initialize current time
$curr_time = date("Y-m-d H:i:s");

// The strtotime() function converts
// English textual date-time
// description to a UNIX timestamp.
$time_ago =strtotime($curr_time);


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
      <hr class="dropdown-divider">
          <li class="notification-item">
              <i class="bi bi-exclamation-circle text-danger"></i>
              <div>
              <a href="../../../subsystem_folder/reports.php">
                <h4>'.$row["from"].'</h4>
                <p>'.$row["content"].'</p>
                <p>'.$time_ago.'</p>
                <a/>
              </div>
              </li>
              <hr class="dropdown-divider">
            ';
         }

            
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

