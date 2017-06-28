<?php 
$page = 'developerapi';
$pagetitle = 'Getting Started';
include 'head2.php'; 
include 'header2.php'; 
?>
							<div class="wrapper">
								<section class="panel">
									<header class="panel-heading">
										<h3 class="text-info"><a href="overview" class="text-info">Get Started</a></h3>
										<p class="block text-muted">Integrate, connect and send SMS messages from your web, mobile or desktop application.</p>
									</header>
									<div class="scrollable wrapper m-b-none">
										<h4 class = "text-info">Overview</h4>
<p>The UXT SMS API was created to enable developers to easily integrate their applications with the UXT SMS gateway.</p> 
<p>The API has a number of functions which allow you to interact with the gateway using code (programmatically) instead of the web interface.</p> 
<p>It enables you to carry out the following actions:</p>
<ul>
	<li><a href="send_sms.php" class="text-info">Send one or more SMS</a></li>
	<li><a href="get_balance.php" class="text-info">Check SMS credits balance</a></li>
</ul>
<p>This documentation is intended to guide you to execute these actions using REST specifically HTTP POST, JSON or XML via the language specific client SDKs.</p>
<p>The current version of the API is <em>v1.0.0</em>.</p>
<hr/>
<h4 class = "text-info">Jump into the Code</h4>
<p>Our ready-made scripts help you connect to our SMS gateway through your chosen programming language.</p>
<p>Select your language, dive right in and get started!</p>
<a href="sdk_php.php" class="btn btn-info btn-lg"><i class="icon-php"></i> PHP SDK</a> &nbsp;
<a href="sdk_python.php" class="btn btn-info btn-lg"><i class="icon-python"></i> Python SDK</a> &nbsp;
<a href="sdk_ruby.php" class="btn btn-info btn-lg"><i class="icon-ruby"></i> Ruby SDK</a> &nbsp;
<a href="sdk_perl.php" class="btn btn-info btn-lg"><i class="icon-perl"></i> Perl SDK</a> &nbsp;
<a href="sdk_csharp.php" class="btn btn-info btn-lg"><i class="icon-csharp"></i> CSharp SDK</a> &nbsp;
<a href="sdk_java.php" class="btn btn-info btn-lg"><i class="icon-java"></i> Java SDK</a>									</div>
																		<div class="row b-b m-l-none m-r-none">
										<hr class="m-t-none m-b-none"/>
										<div class="col-sm-5 wrapper pull-right">
																						<p class="block text-muted pull-right"><a href="api_credentials.php" class="text-info">API Credentials&nbsp;</a></p>
																					</div>
										<div class="col-sm-5 wrapper">
																					</div>
									</div>
																	</section>
							</div>
								
<?php include 'footer2.php'; ?>