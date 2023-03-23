<?php 
require_once('db_connect.php');

if (isset($_POST['addViol'])) {
     
    $category      = mysqli_real_escape_string($conn, $_POST['category']) ;
    $viol_num      = mysqli_real_escape_string($conn, $_POST['viol_num']) ;
    $viol_name      = mysqli_real_escape_string($conn, $_POST['viol_name']) ;
    

            // Select a row from the database where category equals the given value
            $sql = "SELECT * FROM `podms_violation` WHERE `viol_category` = '$category'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // If a row is found, fetch it as an associative array
                $row = mysqli_fetch_assoc($result);{
                    $sanction = $row['viol_sanction'];
                }
                // Do something with the row data
            }

    

    if ($category == 'MINOR'){

        $query = "INSERT INTO `podms_violation` (`viol_num`,`viol_name`,`viol_sanction`,`viol_category`) VALUES ('$viol_num','$viol_name','$sanction','$category')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run){
            $res = [
                'status' => 200,
                'message' => 'Data Added Successfully'
            ];
            echo json_encode($res);
            return;
        }else {

            $res = [
                'status' => 500,
                'message' => 'Data Creation Failed'
            ];
            echo json_encode($res);
            return;
        

    }
    }else if ($category == 'MAJOR'){
        $query = "INSERT INTO `podms_violation` (`viol_num`,`viol_name`,`viol_sanction`,`viol_category`) VALUES ('$viol_num','$viol_name','$sanction','$category')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run){
            $res = [
                'status' => 200,
                'message' => 'Data Added Successfully'
            ];
            echo json_encode($res);
            return;
        }else {

            $res = [
                'status' => 500,
                'message' => 'Data Creation Failed'
            ];
            echo json_encode($res);
            return;
        

    }
    }else if ($category == 'GRAVE'){
        $query = "INSERT INTO `podms_violation` (`viol_num`,`viol_name`,`viol_sanction`,`viol_category`) VALUES ('$viol_num','$viol_name','$sanction','$category')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run){
            $res = [
                'status' => 200,
                'message' => 'Data Added Successfully'
            ];
            echo json_encode($res);
            return;
        }else {

            $res = [
                'status' => 500,
                'message' => 'Data Creation Failed'
            ];
            echo json_encode($res);
            return;
        

    }
    }
    

}


