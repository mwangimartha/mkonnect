<?php 
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page = 'premium_services';
$pagetitle = 'Premium Services';
include 'head2.php'; 
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><?php echo $pagetitle; ?></h3>
			<p class="block text-muted">Keyword based SMS Solutions for your applications</p>
		</header>
		<div class="scrollable wrapper m-b-none">
			
<p>Keywords provide a cost-efficient solution for your application to start receiving messages. A keyword allows you to share our short code (20880), which is accessible from Safaricom and Airtel networks in Kenya and charges the same rate as a regular phone number.
</p><p>
Many clients use this service to test their application and business ideas before acquiring a dedicated short code.
</p>
			
				<h3>Request For A Service</h3>
				<form action="premium_services.php" method="post" name="alphaForm" id="alphaForm">
					<div class="form-group">
						<label>Service Type:</label>
						<select class="form-control" name="servicetype" id="servicetype" ><option value="demand">On Demand</option><option value="subscription">Subscription</option></select>
					</div>
					<div class="form-group">
						<label>Keyword:</label>
						<input class="form-control" type="text" name="keyword" id="keyword" />
					</div>
					<div class="form-group">
						<label>Charge Type:</label>
						<select class="form-control" name="chargetype" id="chargetype"><option value="MO">MO</option><option value="MT">MT</option></select>
					</div>
					<div class="form-group">
						<label>Rate:</label>
						<input class="form-control" type="number" name="rate" id="rate" />
					</div>
					<div class="form-group">
						<label>Mobile Service Providers</label>
						<select class="form-control" name="msp" id="msp" ><option value="Safaricom" selected>Safaricom</option></select>
					</div>
					<div class="form-group">
						<label>Additional Comments:</label>
						<textarea class="form-control" name="comments" id="comments" /></textarea>
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
			<h3>Your Services</h3>
			<div class="table-responsive">
			<table class="table table-striped m-b-none" id="datatables-senders">
				<thead>
					<tr>
						<th width="15%">Keyword</th>
						<th width="10%">Shortcode</th>
						<th width="15%">Service ID</th>
						<th width="15%">Service Type</th>
						<th width="15%">Charge Type</th>
						<th width="15%">Rate</th>
						<th width="15%">Service Provider</th>
						<th width="10%">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = "SELECT * FROM `api_services` WHERE `userid` = '".$_SESSION['userid']."'";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ 
					if($row['servicetype'] == 'subscription') { $link="<a href='subscribers.php?serviceid=".$row['serviceid']."'>View Subs</a>";}
					if($row['servicetype'] == 'demand') { $link="<a href='premium_inbox.php?serviceid=".$row['serviceid']."'>View Inbox</a>";}
					?>
					<tr>
						<td><?php echo $row['keyword']; ?></td>						
						<td><?php echo $row['shortcode']; ?></td>						
						<td><?php echo $row['serviceid']; ?></td>						
						<td><?php echo ucfirst($row['servicetype']); ?></td>						
						<td><?php echo $row['chargetype']; ?></td>						
						<td><?php echo $row['rate']; ?></td>						
						<td><?php echo ucfirst($row['msp']); ?></td>						
						<td><?php echo $link; ?></td>						
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
			</div>
		</div>
	</section>
</div>				
<?php include 'footer2.php'; ?>