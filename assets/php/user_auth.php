<?php
session_start();
if(isset($_POST['type']) && $_POST['type']=='ajax'){
	if((time()-$_SESSION['LAST_ACTIVE_TIME']) > 10){
		
	}
}else{
	if(isset($_SESSION['LAST_ACTIVE_TIME'])){
		if((time()-$_SESSION['LAST_ACTIVE_TIME']) > 60){
			header('location: ../assets/php/logout.php');
			die();
		}
	}
	$_SESSION['LAST_ACTIVE_TIME']=time();
	if(!isset($_SESSION['IS_LOGIN'])){
		header('location: ../../index.php');
		die();
	}
}
?>