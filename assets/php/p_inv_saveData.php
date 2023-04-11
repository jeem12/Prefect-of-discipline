<?php 

include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}



if (isset($_POST['attemptData'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
	$inv_desc = mysqli_real_escape_string($conn, $_POST['inv_desc']);
    $attempt = mysqli_real_escape_string($conn, 4);

    $query = "UPDATE `podms_profiling` SET `inv_attempt` = '$attempt' , `inv_description` = '$inv_desc' WHERE `id` = '$id'";

    $query_run = mysqli_query($conn, $query);

    if ($query_run){
        $res = [
            'status' => 200,

            'message' => 'Data Update Successfully'
        ];
        echo json_encode($res);
		return;
    }else{
        $res = [
            'status' => 500,

            'message' => 'Data Update Failed'

        ];
        echo json_encode($res);
		return;
    }

}