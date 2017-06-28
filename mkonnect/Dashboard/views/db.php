<?php

	session_start();
	date_default_timezone_set('Africa/Nairobi');
	//ini_set('display_errors',1);  error_reporting(E_ALL);
	//error_reporting(E_ALL);
	//ini_set('display_errors','On');

  $con = mysqli_connect("localhost", "mkonnect_konnect", "mkonnect!@#", "mkonnect_m_konnect");

	$inactive = 1200;

// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
	{
		session_destroy();
		header("Location: mkonnect.php");
	}
}
$_SESSION['timeout'] = time();
?>
