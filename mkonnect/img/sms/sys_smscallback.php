<?php 
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
if($_POST['smscallback']){
	$query = "UPDATE `api_users` SET `smscallback` = '".$_POST['smscallback']."' WHERE `id` = '".$_SESSION['userid']."' LIMIT 1";
	mysql_query($query);
}
$page = 'smscallback';
$pagetitle = 'SMS Callback URL';
$query = "SELECT `smscallback` FROM `api_users` WHERE `id` = '".$_SESSION['userid']."' LIMIT 1";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ $smscallback = $row; }
include 'head2.php'; 
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><?php echo $pagetitle; ?></h3>
			<p class="block text-muted">Callback URL that we will invoke whenever we receive a message that belongs to you.</p>
		</header>
		<div class="scrollable wrapper m-b-none">
			<div class="col-md-6">
				<p>To receive messages the instant they come onto our api, you can register a callback URL that we will invoke whenever we receive a message that belongs to you.</p>
				<p>For more details on how to process messages received using the callback, <a href="receive_sms.php" target="_blank">please see this tutorial</a></p>
			</div>
			<div class="col-md-6">
				<form action="sys_smscallback.php" method="post" name="alphaForm" id="alphaForm">
					<div class="form-group">
						<label>Callback URL:</label>
						<input class="form-control" type="url" name="smscallback" id="smscallback" value="<?php echo $smscallback['smscallback']; ?>" required/>
					</div>
					<div class="panel-footer clearfix">
						<div class="pull-right">
							<button class="btn btn-lg btn-danger" type="submit">
								<span>SAVE</span>
							</button>
							<a class="btn btn-link" href="#" onclick="document.getElementById('alphaForm').reset();">Clear</a>
						</div>
					</div>	
				</form>
			</div>
		</div>
	</section>
</div>				
<?php include 'footer2.php'; ?>

