<?php 
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page = 'apikey';
$pagetitle = 'API Key';
$query = "SELECT `api_key` FROM `api_users` WHERE `username` = '".$_SESSION['username']."' LIMIT 1";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ $api_key = $row; }
include 'head2.php'; 
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="overview" class="text-info"><?php echo $pagetitle; ?></a></h3>
			<p class="block text-muted">Generate and use the API Key to integrate third party applications by calling the UXT SMS RESTful API functions.</p>
		</header>
		<div class="scrollable wrapper m-b-none">
		<form action="generate.php" method="post" accept-charset="utf-8" class="form-horizontal">
			<div class="form-group">
				<label class="col-lg-2 control-label hidden-xs">API Key</label>
				<div class="col-lg-3">     
					<input type="text" name="api_key" value="<?php echo $api_key['api_key']; ?>" id="api_key" readonly="readonly" placeholder="API Key" style="cursor: text" class="form-control input-sm bg-light">						
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
					<span class="help-block text-xs text-danger">Ensure that you change the API Key in all your applications after resetting for them to continue working.</span>
					<button type="submit" class="btn btn-warning btn-lg">Generate</button>
				</div>
			</div>
		</form>
		</div>
	</section>
</div>				
<?php include 'footer2.php'; ?>