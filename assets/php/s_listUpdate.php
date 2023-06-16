<?php

include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

$response = array();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Sanitize the input (Example: using mysqli_real_escape_string)
    $id = mysqli_real_escape_string($conn, $id);

    if (isset($_POST['function'])) {
        $function = $_POST['function'];

        // Call the appropriate user-defined function based on the 'function' parameter
        if ($function == 'updateCall') {
            updateCall($id);
        } elseif ($function == 'updateParent') {
            updateParent($id);
        } else {
            $response['status'] = 'failed';
            $response['error'] = 'Invalid function specified.';
        }
    } else {
        $response['status'] = 'failed';
        $response['error'] = 'Function parameter is missing.';
    }
} else {
    $response['status'] = 'failed';
    $response['error'] = 'ID parameter is missing.';
}

echo json_encode($response);

// User-defined function: updateCall
function updateCall($id) {
    global $response, $conn;
    // Your code for the updateCall function here
    // Perform necessary operations
    $query = $conn->query("UPDATE `regist_stud_list` SET `status` = '0' WHERE id = '$id'");

    if ($query) {
        $query2 = $conn->query("INSERT INTO `podms_stud_act` SELECT * FROM `regist_stud_list` WHERE id = '$id'");
        if ($query2){
            $response['status'] = 'success';
            // Fetch the updated data if required
            $updatedQuery = $conn->query("SELECT * FROM `regist_stud_list` WHERE id = '$id'");
            if ($updatedQuery) {
                $response['data'] = $updatedQuery->fetch_assoc();
        }
        }
        
        
    } else {
        $response['status'] = 'failed';
        $response['error'] = 'An error occurred while updating the data. Error: ' . $conn->error;
    }
}

// User-defined function: updateParent
function updateParent($id) {
    global $response, $conn;
    // Your code for the updateParent function here
    // Perform necessary operations
    $query = $conn->query("UPDATE `regist_stud_list` SET `status` = '1' WHERE id = '$id'");

    if ($query) {
        $query2 = $conn->query("INSERT INTO `podms_stud_act` SELECT * FROM `regist_stud_list` WHERE id = '$id'");
        if ($query2){
            $response['status'] = 'success';
            // Fetch the updated data if required
            $updatedQuery = $conn->query("SELECT * FROM `regist_stud_list` WHERE id = '$id'");
            if ($updatedQuery) {
                $response['data'] = $updatedQuery->fetch_assoc();
            }
        }
        
    } else {
        $response['status'] = 'failed';
        $response['error'] = 'An error occurred while updating the data. Error: ' . $conn->error;
    }
}
