<?php
include_once "db_connect.php";
// Retrieve selected category from AJAX request
$category = $_POST['category'];

// Retrieve violin names for selected category
$sql = "SELECT `viol_name` FROM `podms_violation` WHERE `viol_category` = '$category'";
$result = $conn->query($sql);

$options = '';
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$options .= '<option value="' . $row['viol_name'] . '">' . $row['viol_name'] . '</option>';
	}
} else {
	$options .= '<option value="">No Violation Names Found</option>';
}

// Return select options
echo $options;

$conn->close();