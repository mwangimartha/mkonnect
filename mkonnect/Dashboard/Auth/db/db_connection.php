<?php
//connect to database 
//error_reporting(0);
$con = mysqli_connect("localhost", "mkonnect_konnect", "mkonnect!@#", "mkonnect_mkonnect");

if (!$con) {
	
// 	//error message
// 	#die("Page Not found".mysqli_error());
	echo "<script>window.open('404PageNotfound.html','_self')</script>";
	echo $con;

}

?>