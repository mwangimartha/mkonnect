<?php 
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page = 'bulk_alpha';
$pagetitle = 'Bulk SMS Alphanumerics';
include 'head2.php'; 
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="overview" class="text-info"><?php echo $pagetitle; ?></a></h3>
			<p class="block text-muted">Custom Sender IDs</p>
		</header>
		<div class="scrollable wrapper m-b-none">
			<div class="row"><div class="col-md-6">
				<h3>Alphanumerics Overview</h3>
				<p>An alphanumeric is a custom sender id that is registered with Mobile Service Providers and that can be stamped on SMS messages
				being sent out to users. For example, if your business name is <strong>One Two Limited</strong>, you can purchase that alphanumeric and brand
				messages going out from your account as being from <strong>OneTwoLtd</strong>.</p>
				<p>One important distinction between alphanumerics and short codes is that with alphanumerics, users will not be able to reply to that sender id.
				Also, note that alphanumerics are case sensitive.</p>
				<p>Once you purchase an alphanumeric, you will have the option of using it as the sender id for messages originating from your account.</p>
				<p><a href="pricing.php" target="_blank">See Our Prices</a></p>
			</div>
			<div class="col-md-6">
				<h3>Request For An Alphanumeric</h3>
				<form action="bulk_alpha.php" method="post" name="alphaForm" id="alphaForm">
					<div class="form-group">
						<label>Alphanumeric:</label>
						<input class="form-control" type="text" name="alphanumeric" id="alphanumeric" />
					</div>
					<div class="form-group">
						<label>Additional Comments:</label>
						<textarea class="form-control" name="comments" id="comments" /></textarea>
					</div>
					<div class="panel-footer clearfix">
						<div class="pull-right">
							<button class="btn btn-lg btn-danger" type="submit">
								<span>SUBMIT REQUEST</span>
							</button>
							<a class="btn btn-link" href="#" onclick="document.getElementById('alphaForm').reset();">Clear</a>
						</div>
					</div>	
				</form>
			</div></div>
			<div class="row">
			<div class="col-md-12">
				<h3>Your Alphanumerics</h3>
				<div class="table-responsive">
			<table class="table table-striped m-b-none" id="datatables-senders">
				<thead>
					<tr>
						<th width="25%">Service ID</th>
						<th width="25%">Sender ID</th>
						<th width="25%">Sender</th>
						<th width="25%">Service Provider</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = "SELECT * FROM `api_services_bulk` WHERE `userid` = '".$_SESSION['userid']."'";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
					?>
					<tr>
						<td><?php echo $row['serviceid']; ?></td>						
						<td><?php echo $row['senderid']; ?></td>						
						<td><?php echo $row['sender']; ?></td>						
						<td><?php echo ucfirst($row['msp']); ?></td>											
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
			</div>
			</div>
		</div>
	</section>
</div>				
<?php include 'footer2.php'; ?>