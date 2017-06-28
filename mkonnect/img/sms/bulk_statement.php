<?php 
include 'db.php';
if (!$_SESSION['auth']) {
$msg = "You must be logged in to access this system";
$_SESSION['lmsg'] = $msg;
$link = 'index.php';
header( 'Location: '.$link );
}
$page = 'bulk_statement';
$pagetitle = 'Bulk SMS Statement';
include 'head2.php'; 
include 'header3.php';
?>
<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="overview" class="text-info"><?php echo $pagetitle; ?></a></h3>
			<p class="block text-muted">Preview of your Bulk SMS Purchases</p>
		</header>
		<div class="scrollable wrapper m-b-none">
		
		</div>
	</section>
</div>				
<?php include 'footer2.php'; ?>