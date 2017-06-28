<?php
	require ("db.php");
	$username =  mysql_real_escape_string(stripslashes($_POST['login_username']));
	$password =  mysql_real_escape_string(stripslashes($_POST['login_password']));
	
	$success = 0;
	$query = "SELECT * FROM `api_users` WHERE `username` = '".$username."'";
	$link = "index.php";

	$result = mysql_query($query);
	$numrows = mysql_numrows($result);

	if ($numrows == 1)	{
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$password1 = $row['password'];
			$name = $row['name'];
			$password2 = md5($password);
			if ($password1 != $password2) {
				$msg = "Wrong email or password. Please try again";
			} else {
				if($row['email_verification'] == '1') {
					$msg = "Welcome ".$name;
					$success = 1;
					$_SESSION['name']=$name;
					$_SESSION['username']=$username;
					$_SESSION['email']=$row['email'];
					$_SESSION['telephone']=$row['telephone'];
					$_SESSION['userid']=$row['id'];
					$_SESSION['usertype']=$row['type'];
					$_SESSION['api_key']=$row['api_key'];
					$_SESSION['auth'] = true;
					$link = "dashboard.php";
				}
				elseif($row['email_verification'] != '1'){
					$msg = "Email not verified. Please verify your email and try again - or <a href='resend.php?email=".htmlentities($username)."'>click here to resend verification email</a>";
				}
			} 
		}
	}
	elseif ($numrows == 0) {
	$msg = "Wrong email or password. Please try again";
	}
	elseif ($numrows > 1) {
	$msg = "Login error - Please contact your system administrator";
	}
	if ($success == 0) {
	$link = "index.php";
	} 
	$_SESSION['lmsg'] = $msg;
	header( 'Location: '.$link );
	
?>