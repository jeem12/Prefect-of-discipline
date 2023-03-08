<?php
include("db_connect.php");
$error="";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$uname = validate($_POST['uname']);
	$pass = $_POST['password'];

	$ciphering = "aes-128-ctr";
    $option = 0;
    $decryption_iv = '1234567890123456';
    $decryption_key = 'devanshu';
    $decryption = openssl_encrypt($pass, $ciphering, $decryption_key, $option, $decryption_iv);


$sql="SELECT `id` FROM `podms_users` WHERE `username`='$uname' and password='$decryption' and `status`='enable' ";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$active=$row['active'];
$user_id=$row['user_id'];
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['login_user']=$myusername;
$_SESSION['login_user_time']=time();
header("location: ../../subsystem_folder/index.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>



