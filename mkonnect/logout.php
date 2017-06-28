<?php

//redirects them to login page
if ($_SESSION['auth_emp'] = true) {
	//end session
	session_destroy();
	$_SESSION['auth_emp'] = false;
	header("Location: mkonnectn1.php");

}
?>
