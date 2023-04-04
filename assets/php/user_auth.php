<?php
session_start();
if(isset($_POST['type']) && $_POST['type']=='ajax'){
	if(isset($_SESSION['LAST_ACTIVE_TIME'])){
		if((time()-$_SESSION['LAST_ACTIVE_TIME']) > 1600){
			$result = 'logout';
			echo $result;
			// header("Location: logout.php?refresh=true");
			die();
		}
	}
}else{
	$_SESSION['LAST_ACTIVE_TIME']=time();
	if(!isset($_SESSION['IS_LOGIN'])){
		header('location: ../../../../index.php');
		die();
	}
}
?>