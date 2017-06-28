<?php 
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page = 'premium_inbox';
$pagetitle = 'Premium Inbox';
include 'head2.php'; 
include 'header3.php';
$services = array();
$query = "SELECT `serviceid` FROM `api_services` WHERE `userid` = '".$_SESSION['userid']."' AND `servicetype` = 'demand'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ $services[] = $row['serviceid']; }
if(isset($_GET['clear']) && $_GET['clear'] == 1) {
	unset($_SESSION['filter']);
}
if((isset($_SESSION['filter']) && $_SESSION['filter'] == 1) || (isset($_POST['filter']) && $_POST['filter'] == 1))
{
	if($_POST['filter'] == 1) {
		$_SESSION['filter'] = $_POST['filter'];
		$_SESSION['sender'] = $_POST['sender'];
		$_SESSION['serviceid'] = $_POST['serviceid'];
		$_SESSION['sent'] = $_POST['sent'];
	}
}
if(isset($_GET['serviceid']) && $_GET['serviceid'] != ''){
	$_SESSION['filter'] = 1;
	$_SESSION['serviceid'] = $_GET['serviceid'];
}
$tbl_name="api_incoming_sms";
$adjacents = 3;	
$where = ' WHERE (';
foreach($services as $service){
	$where .= "`service_id` = '".$service."' OR ";
}
$where = substr($where,0,-3);
$where .= ') ';
if((isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) {
	if((isset($_SESSION['sender']) && $_SESSION['sender'] != '') || (isset($_SESSION['serviceid']) && $_SESSION['serviceid'] != '') || (isset($_SESSION['sent']) && $_SESSION['sent'] != '') || (isset($_SESSION['start_date']) && $_SESSION['start_date'] != '') || (isset($_SESSION['end_date']) && $_SESSION['end_date'] != '')) {  
		$where .= " AND ";
	}
	if((isset($_SESSION['sender']) && $_SESSION['sender'] != '')) {  
		$where .= "`sender_name` LIKE '%".$_SESSION['sender']."%' AND ";
	}
	if((isset($_SESSION['serviceid']) && $_SESSION['serviceid'] != '')) {  
		$where .= "`service_id` LIKE '%".$_SESSION['serviceid']."%' AND ";
	}
	if((isset($_SESSION['sent']) && $_SESSION['sent'] != '')) {  
		$where .= "`processed` LIKE '%".$_SESSION['sent']."%' AND ";
	}
	if((isset($_SESSION['start_date']) && $_SESSION['start_date'] != '')) {  
		$where .= "`in_date` >= '".$_SESSION['start_date']."' AND ";
	}
	if((isset($_SESSION['end_date']) && $_SESSION['end_date'] != '')) {  
		$where .= "`in_date` <= '".$_SESSION['end_date']."' AND ";
	}
	$where = substr($where,0,-4);
}
$where .= " ORDER BY `in_date` DESC";
$query = "SELECT COUNT(*) as num FROM ".$tbl_name." ".$where;
$total_pages = mysql_fetch_array(mysql_query($query));
$total_pages = $total_pages[num];

$targetpage = "premium_inbox.php";
$limit = 25;
$page = $_GET['page'];
if($page) {	$start = ($page - 1) * $limit; } else {	$start = 0; }
$sql = "SELECT * FROM ".$tbl_name." ".$where." LIMIT ".$start.", ".$limit;

$result_smss = mysql_query($sql);
$displayrows = mysql_num_rows($result);

if ($page == 0) $page = 1;
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($total_pages/$limit);
$lpm1 = $lastpage - 1;

$pagination = "";
if($lastpage > 1)
{	
	$pagination .= "<div class=\"pagination\">";
	if ($page > 1) 
		$pagination.= "<a href=\"$targetpage?page=$prev\">&laquo; previous</a>";
	else
		$pagination.= "<span class=\"disabled\">&laquo; previous</span>";	
	
	if ($lastpage < 7 + ($adjacents * 2))
	{	
		for ($counter = 1; $counter <= $lastpage; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<span class=\"current\">$counter</span>";
			else
				$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
		}
	}
	elseif($lastpage > 5 + ($adjacents * 2))
	{
		if($page < 1 + ($adjacents * 2))		
		{
			for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
			$pagination.= "...";
			$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
			$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
		}
		elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
		{
			$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
			$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
			$pagination.= "...";
			for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
			$pagination.= "...";
			$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
			$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
		}
		else
		{
			$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
			$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
			$pagination.= "...";
			for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
	}
	if ($page < $counter - 1) 
		$pagination.= "<a href=\"$targetpage?page=$next\">next &raquo;</a>";
	else
		$pagination.= "<span class=\"disabled\">next &raquo;</span>";
		$pagination.= "</div>\n";
}
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="overview" class="text-info"><?php echo $pagetitle; ?></a></h3>
			<p class="block text-muted">Inbox for Premium Messages</p>
		</header>
		<div class="scrollable wrapper m-b-none">
			<h5>Filter SMSs</h5>
			<form action="premium_inbox.php" method="POST">
				<label><select name="sender" id="sender" class="form-control input-sm">
					<option value="">Short Codes</option>
					<?php
					$shortcodes = array();
					$query = "SELECT DISTINCT `shortcode` FROM `api_services` WHERE `userid` = '".$_SESSION['userid']."' AND `servicetype` = 'demand'";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ $shortcodes[] = $row['shortcode']; }
					foreach($shortcodes as $shortcode){
						if((isset($_SESSION['sender']) && $_SESSION['sender'] == $shortcode) && (isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) { $sel = 'selected'; } else { $sel = ''; }
						echo '<option value="'.$shortcode.'" '.$sel.'>'.$shortcode.'</option>';
					}
					?>
				</select></label><br />
				<label><select name="serviceid" id="serviceid" class="form-control input-sm">
					<option value="">Service ID</option>
					<?php
					$services = array();
					$query = "SELECT DISTINCT `serviceid` FROM `api_services` WHERE `userid` = '".$_SESSION['userid']."' AND `servicetype` = 'demand'";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ $services[] = $row['serviceid']; }
					foreach($services as $service){
						if((isset($_SESSION['serviceid']) && $_SESSION['serviceid'] == $service) && (isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) { $sel = 'selected'; } else { $sel = ''; }
						echo '<option value="'.$service.'" '.$sel.'>'.$service.'</option>';
					}
					?>
				</select></label><br />
				<label><select name="sent" id="sent" class="form-control input-sm">
					<option value="">Sent</option>
					<option value="1" <?php if((isset($_SESSION['sent']) && $_SESSION['sent'] == '1') && (isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) { echo 'selected'; } ?>>Yes</option>
					<option value="0" <?php if((isset($_SESSION['sent']) && $_SESSION['sent'] == '0') && (isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) { echo 'selected'; } ?>>No</option>
				</select></label><br />
				<label>Start Date: <input type="date" name="start_date" class="form-control input-sm" <?php if((isset($_SESSION['start_date']) && $_SESSION['start_date'] != '') && (isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) { echo 'value="'.$_SESSION['start_date'].'"'; } ?>></label><br />
				<label>End Date: <input type="date" name="end_date" class="form-control input-sm" <?php if((isset($_SESSION['end_date']) && $_SESSION['end_date'] != '') && (isset($_SESSION['filter']) && $_SESSION['filter'] == 1)) { echo 'value="'.$_SESSION['end_date'].'"'; } ?>></label>
				<input type="submit" class="btn" value="Filter">&nbsp;&nbsp;&nbsp;<?php if(isset($_SESSION['filter']) && $_SESSION['filter'] == 1) { ?><a class="btn btn-link" href="premium_inbox.php?clear=1">Clear Filters</a><?php } ?>
				<input type="hidden" name="filter" value="1">
			</form>
			<div class="panel panel-default">
				<div class="panel-heading">
					List of SMSs
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Telephone</th>
									<th>SMS Text</th>
									<th>Shortcode</th>
									<th>Service ID</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = $start + 1;
								while($row = mysql_fetch_array($result_smss)) { 
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['dest_msisdn']; ?></td>
									<td><?php echo $row['text_message']; ?></td>
									<td><?php echo $row['sender_name']; ?></td>
									<td><?php echo $row['service_id']; ?></td>
									<td><?php echo $row['in_date']; ?></td>
								</tr>
								<?php $i++; } ?>
								<tr><td colspan="6" align="center"><?php echo $pagination; ?></td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>				
<?php include 'footer2.php'; ?>