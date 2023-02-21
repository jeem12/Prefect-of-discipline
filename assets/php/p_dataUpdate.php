<?php 

include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}



if (isset($_POST['sanctionData'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $viol_level = mysqli_real_escape_string($conn, $_POST['level']);
    $violation = mysqli_real_escape_string($conn, $_POST['viol']);
    $dutyS = mysqli_real_escape_string($conn, ($_POST['duty_timeS']));
    $dutyE = mysqli_real_escape_string($conn, $_POST['duty_timeE']);
    $duty_loc = mysqli_real_escape_string($conn, $_POST['dutyLoc']);
    $duty = implode(', ', $_POST['duties']); 

    // CONVERT CHECKBOX ARRAY TO STRING
    

    # getting image data and store them in var
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error    = $_FILES['image']['error'];

    # if there is no error occurred while uploading
	if ($error === 0) {
		if ($img_size > 1000000) {
			# error message
			$em = "Sorry, your file is too large.";

			# response array
			$error = array('error' => 1, 'em'=> $em);

			/** 
		    printing out php array and 
		    converting it into JSON format
		    **/

		    echo json_encode($error);
		    exit();
		}else {
			# get image extension store it in var
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

			/** 
			convert the image extension into lower case 
			and store it in var 
			**/
			$img_ex_lc = strtolower($img_ex);

			/** 
			crating array that stores allowed
			to upload image extensions.
			**/
			$allowed_exs = array("jpg", "jpeg", "png");

			/** 
			check if the the image extension 
			is present in $allowed_exs array
			**/
			if (in_array($img_ex_lc, $allowed_exs)) {
				/** 
				 renaming the image name with 
				 with random string
				**/
                $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;

				# crating upload path on root directory
				$img_upload_path = "../uploads/".$new_img_name;

				# move uploaded image to 'uploads' folder
				move_uploaded_file($tmp_name, $img_upload_path);

				# inserting imge name into database
                $query = "UPDATE `podms_profiling` SET `violation_level` = '$viol_level' , `violation`='$violation' , `duty_start` = '$dutyS' , `duty_end` = '$dutyE' , `duties`='$duty', `duty_location`= '$duty_loc' , `status` = '2',`image_name` = '$new_img_name' WHERE id='$id'";
                
                $query_run = mysqli_query($conn, $query);
                // , `image` = '$file'
                if ($query_run) {
                    $query2 = "INSERT INTO `podms_duty` SELECT * FROM `podms_profiling` WHERE `id` = '$id'";
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

			}else {
				# error message
				$em = "You can't upload files of this type";

				# response array
				$error = array('error' => 1, 'em'=> $em);

				/** 
			    printing out php array and 
			    converting it into JSON format
			    **/

			    echo json_encode($error);
			    exit();
			}
		}
	}else {
		# error message
		$em = "unknown error occurred!";

		# response array
		$error = array('error' => 1, 'em'=> $em);

		/** 
	    printing out php array and 
	    converting it into JSON format
	    **/

	    echo json_encode($error);
	    exit();
	}
          

    if ($viol_level == NULL || $violation == NULL || $dutyS == NULL || $dutyE == NULL || $duty_loc == NULL || $duty == NULL || $file == NULL ) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }



}