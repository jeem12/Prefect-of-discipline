<?php 

require_once('db_connect.php');

if (isset($_POST['addUser'])) {
     
    $name          = mysqli_real_escape_string($conn, $_POST['name']) ;
    $uname         = mysqli_real_escape_string($conn, $_POST['uname']) ;
    $pass          = mysqli_real_escape_string($conn, $_POST['pass']) ;
    $position      = mysqli_real_escape_string($conn, $_POST['position']);



    $ciphering = "aes-128-ctr";
    $option = 0;
    $encryption_iv = '1234567890123456';
    $encryption_key = 'devanshu';
    $encryption = openssl_encrypt($pass, $ciphering, $encryption_key, $option, $encryption_iv);
    
    if ($name == NULL || $uname == NULL || $pass == NULL || $position == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO `podms_users` (`name`,`username`,`password`,`position`) VALUES ('$name','$uname','$encryption','$position')";
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




