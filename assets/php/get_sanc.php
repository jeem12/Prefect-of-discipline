<?php
include_once "db_connect.php";

// Retrieve selected category from AJAX request
$category = $_POST['category'];

// Retrieve violin names for selected category
$sql = "SELECT * FROM `podms_violation` WHERE `viol_category` = '$category' LIMIT 1";
$result = $conn->query($sql);

$html = '';
if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {
		$html .= '<option value="' . $row['viol_category'] . '">' . $row['viol_sanction'] . '</option>';
	}


} else {
	$html .= '<p>No Sanction Found</p>';
}

// Return input field for updating selected data
echo $html;

$conn->close();
?>
