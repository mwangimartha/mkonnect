<?php 
$page = 'receive_sms';
$pagetitle = 'Receive SMS';
include 'head2.php'; 
include 'header2.php'; 
?>

<div class="wrapper">
	<section class="panel">
		<header class="panel-heading">
			<h3 class="text-info"><a href="send_sms.php" class="text-info">Receive SMS</a></h3>
			<p class="block text-muted">This describes how to receive messages from the UXT SMS System</p>
		</header>
	<div class="scrollable wrapper m-b-none">
		<h4 class="text-info">SMS Callback</h4>
		<p>You can register a callback URL with us and we will forward any messages that are sent to your account. We will make a POST call to the path provided containing the following parameters:</p>
		<ul class="lgcircle">
			<li><strong>from</strong>: The number that sent the message</li>
			<li><strong>to</strong>: The number to which the message was sent</li>
			<li><strong>text</strong>: The message content</li>
			<li><strong>date</strong>: The date and time when the message was received</li>
			<li><strong>id</strong>: The internal ID that we use to store this message</li>
			<li><strong>serviceid</strong>: Parameter required when sending an SMS</li>
			<li><strong>linkid</strong>: Optional parameter required when responding to an on-demand user request with a premium message</li>
		</ul>
	</div>
	<div class="row b-b m-l-none m-r-none">
		<hr class="m-t-none m-b-none" />
		<div class="col-sm-5 wrapper pull-right">
			<p class="block text-muted pull-right"><a href="sdk_php.php" class="text-info">PHP SDK&nbsp;</a></p>
		</div>
		<div class="col-sm-5 wrapper">
			<p class="block text-muted"><a href="get_balance.php" class="text-info">&nbsp;Get Balance</a></p>
		</div>
	</div>
	</section>
</div>
<?php include 'footer2.php'; ?>