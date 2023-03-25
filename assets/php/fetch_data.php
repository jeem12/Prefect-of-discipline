<?php

// connect to the database
include "db_connect.php";

// fetch the data from the database
$query = "SELECT DATE_FORMAT(date, '%b %Y') AS month, COUNT(id) AS total FROM podms_records WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW()) GROUP BY month ORDER BY MONTH(date)";
$result = $db->query($query);

// check for errors
if (!$result) {
  die('Failed to fetch data from database: ' . $db->error);
}

// fetch the results as an array of objects
$data = array();
while ($row = $result->fetch_object()) {
  $data[] = $row;
}

// output the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
