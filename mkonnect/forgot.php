<?php
if ($_SESSION['auth']) {
	header( 'Location: profile.php' ) ;
}
	include 'db.php';
	include 'head.php';
?>
<body id="login-bg">

<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.php"><img src="images/logo.png" alt="Logo" height="40" /></a>
	</div>
	<!-- end logo -->

	<div class="clear"></div>

	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<form action="remind.php" method="post" name="remindForm">
		<?php if(isset($_SESSION['lmsg']) && $_SESSION['lmsg'] != '') { echo '<p style="color:red">'.$_SESSION['lmsg'].'</p><br />'; $_SESSION['lmsg'] = ''; } ?>
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" name="email" id="email"  value="<?php if(isset($_GET['email']) && $_GET['email'] != '') { echo $_GET['email']; } ?>"   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
		</form>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="index.php" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>
