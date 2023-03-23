<?php
include_once "db_connect.php";

// Retrieve selected category from AJAX request
$category = $_POST['category'];

// Retrieve violin names for selected category
$sql = "SELECT * FROM `podms_violation` WHERE `viol_category` = '$category'";
$result = $conn->query($sql);

$html = '';
if ($result->num_rows > 0) {
	// $html .= '<label for="viol_name">Select a Violation Name:</label>';
	// $html .= '<select name="viol_name" id="viol_name">';
	while ($row = $result->fetch_assoc()) {
		$html .= '<option value="' . $row['id'] . '">' . $row['viol_name'] . '</option>';
	}
	// $html .= '</select>';

} else {
	$html .= '<p>No Violation Names Found</p>';
}

// Return input field for updating selected data
echo $html;

$conn->close();
?>
