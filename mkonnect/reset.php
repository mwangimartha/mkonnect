<?php
	require ("db.php");
	$email = $_GET['email'];
	$key = $_GET['key'];

	$query = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `pass_verification` = '".$key."'";
	$link = "mkonnect.php";
	$result = mysqli_query($con,$query);
	$numrows = mysqli_num_rows($result);
	if ($numrows == 1){
			include 'password.php';
	}
	elseif ($numrows == 0) {
		echo  'Invalid / Expired Verification Code. Please confirm your reset code and try again or <a href="forgot.php">click here to generate a new code</a>';
		$_SESSION['lmsg'] = $lmsg;
		header( 'Location: '.$link );
	}
	elseif ($numrows > 1) {
		echo "System Error - Please contact the system administrator.";
		$_SESSION['lmsg'] = $lmsg;
		header( 'Location: '.$link );
	}
?>
