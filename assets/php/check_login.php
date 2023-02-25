<?php 
include "db_connect.php";
session_start(); 


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = $_POST['password'];

	$ciphering = "aes-128-ctr";
    $option = 0;
    $decryption_iv = '1234567890123456';
    $decryption_key = 'devanshu';
    $decryption = openssl_encrypt($pass, $ciphering, $decryption_key, $option, $decryption_iv);


	

	if (empty($uname)) {
		header("Location: ../../index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../../index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM podms_users WHERE username='$uname' AND password='$decryption'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $decryption) {
            	$_SESSION['user_name'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['position'] = $row['position'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../../subsystem_folder/index.php");
		        exit();
            }else{
				header("Location: ../../index.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: ../../index.php?error=Incorrect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../../index.php");
	exit();
}