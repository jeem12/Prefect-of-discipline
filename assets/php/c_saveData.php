<?php 
require_once('db_connect.php');

if (isset($_POST['addData'])) {
     
    $idNum      = mysqli_real_escape_string($conn, $_POST['idNum']) ;
    $fname      = mysqli_real_escape_string($conn, $_POST['fname']) ;
    $mname      = mysqli_real_escape_string($conn, $_POST['mname']) ;
    $lname      = mysqli_real_escape_string($conn, $_POST['lname']);
    $section      = mysqli_real_escape_string($conn, $_POST['section']);
    $course     = mysqli_real_escape_string($conn, $_POST['course']);
    $item_name      = mysqli_real_escape_string($conn, $_POST['item_name']) ;
    $item_desc      = mysqli_real_escape_string($conn, $_POST['item_desc']);
    $status = mysqli_real_escape_string($conn, $_POST['choice']);

    // $violation  = mysqli_real_escape_string($conn, $_POST['viol']);
    
    if ($idNum == NULL || $fname == NULL || $mname == NULL || $lname == NULL || $course == NULL || $item_name == NULL || $item_desc == NULL )
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO `podms_confiscated` (`id_number`,`first_name`,`middle_name`,`last_name`,`section`,`course`,`item_name`,`item_desc`,`status`) VALUES ('$idNum','$fname','$mname','$lname','$section','$course','$item_name','$item_desc','$status')";
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


