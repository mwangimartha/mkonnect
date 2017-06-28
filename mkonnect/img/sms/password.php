<?php
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page='changepassword';
$pagetitle='Change Password';

include 'head2.php';
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="overview" class="text-info"><?php echo $pagetitle; ?></a></h3>
			<p class="block text-muted">Please fill in the form below to change your password.</p>
		</header>
		<div class="scrollable wrapper m-b-none">		
		<form action="profile.php" method="post" name="accountForm" id="accountForm">
			<div class="form-group">
				<label>Username:</label>
				<?php echo $_SESSION['username']; ?>
			</div>
			<div class="form-group">
				<label>Current Password:</label>
				<input class="form-control" type="password" name="password" id="password" />
			</div>
			<div class="form-group">
				<label>New Password:</label>
				<input class="form-control" type="password" name="newpassword" id="newpassword" />
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input class="form-control" type="password" name="newpassword2" id="newpassword2" />
			</div>
			<div class="panel-footer clearfix">
				<div class="pull-right">
					<button class="btn btn-lg btn-danger" type="submit">
						<span>SAVE</span>
					</button>
					<a class="btn btn-link" href="#" onclick="document.getElementById('accountForm').reset();">Clear</a>
				</div>
			</div>	
		</form>
		</div>
	</section>
</div>
<?php
include 'footer2.php';
?>