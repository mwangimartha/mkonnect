<?php
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page='account';
$pagetitle='Account Details';

include 'head2.php';
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="overview" class="text-info"><?php echo $pagetitle; ?></a></h3>
			<p class="block text-muted">Please fill in the form below to edit your account details. Please note that you cannot edit your username.</p>
		</header>
		<div class="scrollable wrapper m-b-none">
			<form action="account.php" method="post" name="accountForm">
				<div class="form-group">
					<label>Username:</label>
					<?php echo $_SESSION['username']; ?>
				</div>
				<div class="form-group">
					<label>Name / Company Name:</label>
					<input class="form-control" type="text" name="name" id="name" value="<?php echo $_SESSION['name']; ?>"/>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input class="form-control" type="text" name="name" id="name" value="<?php echo $_SESSION['email']; ?>"/>
				</div>
				<div class="form-group">
					<label>Telephone:</label>
					<input class="form-control" type="text" name="telephone" id="telephone" value="<?php echo $_SESSION['telephone']; ?>" />
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