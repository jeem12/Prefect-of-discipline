<?php 
require_once('db_connect.php');

if (isset($_POST['addData'])) {
     
    $idNum      = mysqli_real_escape_string($conn, $_POST['idNum']) ;
    $fname      = mysqli_real_escape_string($conn, $_POST['fname']) ;
    $mname      = mysqli_real_escape_string($conn, $_POST['mname']) ;
    $lname      = mysqli_real_escape_string($conn, $_POST['lname']);
    $course     = mysqli_real_escape_string($conn, $_POST['course']);
    $inci_desc      = mysqli_real_escape_string($conn, $_POST['inci_desc']) ;
    $inci_date      = mysqli_real_escape_string($conn, $_POST['inci_date']);
    $inci_time     = mysqli_real_escape_string($conn, $_POST['inci_time']);
    $status     = 1;
    // $violation  = mysqli_real_escape_string($conn, $_POST['viol']);
    
    if ($idNum == NULL || $fname == NULL || $mname == NULL || $lname == NULL || $course == NULL )
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO `podms_profiling` (`id_number`,`first_name`,`middle_name`,`last_name`,`course`,`inci_desc`,`inci_date`,`inci_time`,`status`) VALUES ('$idNum','$fname','$mname','$lname','$course','$inci_desc','$inci_date','$inci_time','$status')";
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


