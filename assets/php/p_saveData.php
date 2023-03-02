<?php 
require_once('db_connect.php');

if (isset($_POST['addData'])) {
     
    $idNum      = mysqli_real_escape_string($conn, $_POST['idNum']) ;
    $fname      = mysqli_real_escape_string($conn, $_POST['fname']) ;
    $mname      = mysqli_real_escape_string($conn, $_POST['mname']) ;
    $lname      = mysqli_real_escape_string($conn, $_POST['lname']);
    $section      = mysqli_real_escape_string($conn, $_POST['section']);
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

    $query = "INSERT INTO `podms_profiling` (`complained_id_number`,`complained_first_name`,`complained_middle_name`,`complained_last_name`,`complained_section`,`complained_course`,`inci_desc`,`inci_date`,`inci_time`,`status`) VALUES ('$idNum','$fname','$mname','$lname','$section','$course','$inci_desc','$inci_date','$inci_time','$status')";
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


