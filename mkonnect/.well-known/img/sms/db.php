<?php
	session_start();
	date_default_timezone_set('Africa/Nairobi');
	//ini_set('display_errors',1);  error_reporting(E_ALL);
	//error_reporting(E_ALL);
	//ini_set('display_errors','On');
	$dbusername='root';
	$dbpassword='dr67hj1';
	$servername='localhost';
	$myDB='sdp';
	$link=mysql_connect($servername,$dbusername,$dbpassword);
	if(!$link) { die('Could not connect: '. mysql_error()); }
	$conn=mysql_select_db($myDB, $link) or die('Could not open database $myDB');
	$inactive = 1200;
 
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
	{ 
		session_destroy(); 
		header("Location: index.php");
	}
}
$_SESSION['timeout'] = time();
?>
