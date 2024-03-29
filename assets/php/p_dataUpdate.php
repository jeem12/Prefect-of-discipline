<?php 

include "db_connect.php";
// $conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}



if (isset($_POST['sanctionData'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);



	if (!empty($_POST['attempt'])) {
		$attempt = mysqli_real_escape_string($conn, $_POST['attempt']);
		$attemptDesc = mysqli_real_escape_string($conn, $_POST['attemptDesc']);

		$sql = "SELECT inv_description FROM podms_profiling WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$existingDesc = $row['inv_description'];

		$newDesc = $existingDesc . " - " . $attemptDesc;


		$query = "UPDATE `podms_profiling` SET `inv_attempt` = '$attempt', `inv_description` = '$newDesc' WHERE `id` = '$id'";
		$query_run = mysqli_query($conn, $query);

		if($query_run){
			$res = [
				'status' => 200,

				'message' => 'Data Update Successfully'

			];
			echo json_encode($res);
			return;
		}else{
			$res = [
				'status' => 500,

				'message' => 'Data Update Successfully'

			];
			echo json_encode($res);
			return;

		}
	} else {


		$idNum = mysqli_real_escape_string($conn, $_POST['idNum']);
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$mname = mysqli_real_escape_string($conn, ($_POST['mname']));
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$section = mysqli_real_escape_string($conn, $_POST['section']);
		$course = mysqli_real_escape_string($conn, $_POST['course']);
		$viol_level = mysqli_real_escape_string($conn, $_POST['level']);
		$violation = mysqli_real_escape_string($conn, $_POST['viol']);
		$sanction = mysqli_real_escape_string($conn, $_POST['sanction']);


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

					// process if any key does not exist or has an empty value
					$query10 = "UPDATE `podms_profiling` SET `complained_id_number` = '$idNum' , `complained_first_name` = '$fname' , `complained_middle_name` = '$mname' , `complained_last_name` = '$lname' , `complained_section` = '$section' , `complained_course` = '$course' , `violation_level` = '$viol_level' , `violation`='$violation' , `sanction` = '$sanction', `status` = '3',`image_name` = '$new_img_name' WHERE `id` ='$id' ";
					$query_run10 = mysqli_query($conn, $query10);
					if ($query_run10){
						$query11 = "INSERT INTO `podms_records` SELECT * FROM `podms_profiling` WHERE `id` = '$id' ";
						$query_run11 = mysqli_query($conn, $query11);

						if($query_run11){
							$query12 = "DELETE FROM podms_profiling WHERE `id` = '$id'";
							$query_run12 = mysqli_query($conn, $query12);
							if($query_run12){
								$res = [
									'status' => 200,
						
									'message' => 'Data Update Successfully'
						
								];
								echo json_encode($res);
								return;
							}else{
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
}