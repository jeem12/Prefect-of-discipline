
<?php

$sname= "localhost";
$unmae= "pod_user";
$password = "d%aa0y7!1K24bzu2";

$db_name = "pod_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>




<!-- <?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "db_test";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?> -->
