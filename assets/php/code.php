<?php
include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}




if (isset($_POST['addData'])) {
     
        $idNum      = mysqli_real_escape_string($conn, $_POST['idNum']) ;
        $fname      = mysqli_real_escape_string($conn, $_POST['fname']) ;
        $mname      = mysqli_real_escape_string($conn, $_POST['mname']) ;
        $lname      = mysqli_real_escape_string($conn, $_POST['lname']);
        $course     = mysqli_real_escape_string($conn, $_POST['course']);
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

        $query = "INSERT INTO `podms_profiling` (`id_number`,`first_name`,`middle_name`,`last_name`,`course`,`status`) VALUES ('$idNum','$fname','$mname','$lname','$course','$status')";
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





if (isset($_POST['sanctionData'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $viol_level = mysqli_real_escape_string($conn, $_POST['offense']);
    $violation = mysqli_real_escape_string($conn, $_POST['level']);
    if ($violation =='otherMinor') {
        $violation = mysqli_real_escape_string($conn, $_POST['specifiedMinor']);
      }elseif ($violation =='otherMajor'){
             $violation = mysqli_real_escape_string($conn, $_POST['specifiedMajor']);
    }elseif ($violation =='otherGra'){
            $violation = mysqli_real_escape_string($conn, $_POST['specifiedGra']);
          }



    if ($violation == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE `podms_profiling` SET `violation_level` = '$viol_level' , `violation`='$violation' , `status` = '3' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $query2 = "INSERT INTO `podms_records` SELECT * FROM `podms_profiling` WHERE `id` = '$id'";
        $query_run2 = mysqli_query($conn, $query2);
        if ($query_run2) {
            $query3 = "DELETE FROM podms_profiling WHERE `id` = '$id'";
            $query_run3 = mysqli_query($conn, $query3);

            if ($query_run3) {
                $res = [
                    'status' => 200,
        
                    'message' => 'Data Update Successfully'
        
                ];
                echo json_encode($res);
                // header("./profiling.php");
                return;
            }else {
                $res = [
                    'status' => 500,
        
                    'message' => 'Data Not Updated',
                ];
                echo json_encode($res);
                return;
            } 

        }
        
    }

}


if (isset($_GET['id1'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id1']);

    $query = "SELECT * FROM podms_sp_appointment WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $row = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,

            'message' => 'Data Fetch Successfully by id',

            'data' => $row
        ];
        echo json_encode($res);
        return;
    }else {
        $res = [
            'status' => 404,

            'message' => 'Id Not Found',


        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['appointData'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $desc = mysqli_real_escape_string($conn, $_POST['text']);

    
    

    if ($id == NULL || $date == NULL || $time == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query1 = "UPDATE `podms_sp_appointment` SET `start` = '$date' ,  `end` = '$date',`time`='$time', `title` = '$title', `description` = '$desc'  WHERE `id` = '$id'";
    $query_run1 = mysqli_query($conn, $query1);

    if ($query_run1) {

        $query2 = "INSERT INTO `podms_events` SELECT * FROM `podms_sp_appointment` WHERE `id` = '$id'";
        $query_run2 = mysqli_query($conn, $query2);

        if ($query_run2) {
            $query3 = "DELETE FROM `podms_sp_appointment` WHERE `id` = '$id'";
            $query_run3 = mysqli_query($conn, $query3);

            if ($query_run3) {
                $res = [
                    'status' => 200,
        
                    'message' => 'Data Update Successfully'
        
                ];
                echo json_encode($res);
                header("../../appointment.php");
                return;
            }else {
                $res = [
                    'status' => 500,
        
                    'message' => 'Data Not Updated',
        
        
                ];
                echo json_encode($res);
                return;
            }
        }

        
    }
}


        


if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM podms_profiling WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $row = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,

            'message' => 'Data Fetch Successfully by id',

            'data' => $row
        ];
        echo json_encode($res);
        return;
    }else {
        $res = [
            'status' => 404,

            'message' => 'Id Not Found',


        ];
        echo json_encode($res);
        return;
    }
}





if (isset($_POST['delete_data'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "DELETE FROM reports WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $res = [
            'status' => 200,

            'message' => 'Data Deleted Successfully',


        ];
        echo json_encode($res);
        return;
    }else {
        $res = [
            'status' => 500,

            'message' => 'Data Not Deleted',


        ];
        echo json_encode($res);
        return;
    }
}

// if($_POST["action"] == 'fetch')
//     {
//         $order_column = array('order_number', 'order_total', 'order_date');
//         $main_query = "
//         SELECT order_number, SUM(order_total) AS order_total, order_date
//         FROM podms_records
//         ";
//         $search_query = 'WHERE order_date <= "'.date('Y-m-d').'" AND ';
//         if(isset($_POST["start_date"], $_POST["end_date"]) && $_POST["start_date"] != '' && $_POST["end_date"] != '')
//         {
//             $search_query .= 'order_date >= "'.$_POST["start_date"].'" AND order_date <= "'.$_POST["end_date"].'" AND ';
//         }
//         if(isset($_POST["search"]["value"]))
//         {
//             $search_query .= '(order_number LIKE "%'.$_POST["search"]["value"].'%" OR order_total LIKE "%'.$_POST["search"]["value"].'%" OR order_date LIKE "%'.$_POST["search"]["value"].'%")';
//         }
//         $group_by_query = " GROUP BY order_date ";
//         $order_by_query = "";
//         if(isset($_POST["order"]))
//         {
//             $order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
//         }
//         else
//         {
//             $order_by_query = 'ORDER BY order_date DESC ';
//         }
//         $limit_query = '';
//         if($_POST["length"] != -1)
//         {
//             $limit_query = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
//         }
//         $statement = $connect->prepare($main_query . $search_query . $group_by_query . $order_by_query);
//         $statement->execute();
//         $filtered_rows = $statement->rowCount();
//         $statement = $connect->prepare($main_query . $group_by_query);
//         $statement->execute();
//         $total_rows = $statement->rowCount();
//         $result = $connect->query($main_query . $search_query . $group_by_query . $order_by_query . $limit_query, PDO::FETCH_ASSOC);
//         $data = array();
//         foreach($result as $row)
//         {
//             $sub_array = array();
//             $sub_array[] = $row['order_number'];
//             $sub_array[] = $row['order_total'];
//             $sub_array[] = $row['order_date'];
//             $data[] = $sub_array;
//         }
//         $output = array(
//             "draw"          =>  intval($_POST["draw"]),
//             "recordsTotal"  =>  $total_rows,
//             "recordsFiltered" => $filtered_rows,
//             "data"          =>  $data
//         );
//         echo json_encode($output);
//     }



?>

