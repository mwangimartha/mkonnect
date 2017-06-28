
<body id="login-bg">
<div id="login-holder">
	<div class="clear"></div>
	<div id="loginbox">
		<div id="login-inner">
		<form action="newpassword.php" method="post" name="resetForm">
		<h3 style="color:black">Password Reset Form</h3>
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<th>New Password:</th>
			<td><input type="password" name="password" id="password"  value="" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Confirm Password:</th>
			<td><input type="password" name="password2" id="password2"  value="" class="login-inp" required /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
		<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
		<input type="hidden" name="key" id="key" value="<?php echo $key; ?>">
		</form>
		</div>
		<div class="clear"></div>
		<a href="mkonnect.php" class="back-login">Back to login</a>
	</div>
</div>
</body>
</html>
