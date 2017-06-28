<?php 
$page = 'api_credentials';
$pagetitle = 'API Credentials';
include 'head2.php'; 
include 'header2.php'; 
?>
							<div class="wrapper">
								<section class="panel">
									<header class="panel-heading">
										<h3 class="text-info"><a href="api_credentials.php" class="text-info">API Credentials</a></h3>
										<p class="block text-muted">API credentials are security tokens that are used to access, authorize and authenticate your interaction with the UXT SMS Platform.</p>
									</header>
									<div class="scrollable wrapper m-b-none">
										<h4 class="text-info">Common Terms</h4>
<p><strong>API</strong> - Application Programmers Interface - This is the platform that allows your application to access and carry out functions via code</p>
<p><strong>API Key</strong> - Your unique API key which identifies your account and is used by your applications whenever they access the UXT SMS API.</p>
<br>
<h4 class="text-info">What is my API Key?</h4>
<p>The first step in accessing the UXT SMS API to carry out third party integration is to create your API key.</p>
<p>Your API Key is the security token that is used to access, authorize and authenticate your interaction with the UXT SMS Platform.</p> 
<p>Each UXT SMS account has a unique API Key and these can be generated as required.</p>
<p>All API requests have to be made with the API Key as part of the API call parameters.</p>					
<br>
<h4 class="text-info">How to generate your API key</h4>
<p>You can generate your API key in the Settings under the API Key section of your UXT SMS account.</p> 
<br>
<p></p>
<br>
<h4 class="text-info">Generate API Key Step By Step</h4>
<ol>
	<li>Login to your UXT SMS Account</li>
	<li>Click on Settings</li>
	<li>Select API Key menu</li>
	<li>On the screen that appears, click Generate API Credentials to generate API credentials if you don't already have them</li>
	<li>That's it! Your API credentials are now ready and must be included in ALL your API calls.</li>
</ol>
<br>
<h4 class="text-info">Secure you Credentials</h4>
<p class="text-danger">It is very important that you keep your API credentials safe as they can be used to access and interact with your account.</p>
<p>It is also important to note that <span class="text-danger">once you generate a new API key</span> you <span class="text-danger">must update all your applications</span> with the new credentials for them to continue working.</p>																		</div>
																		<div class="row b-b m-l-none m-r-none">
										<hr class="m-t-none m-b-none">
										<div class="col-sm-5 wrapper pull-right">
																						<p class="block text-muted pull-right"><a href="send_sms.php" class="text-info">Send SMS&nbsp;</a></p>
																					</div>
										<div class="col-sm-5 wrapper">
																						<p class="block text-muted"><a href="developerapi.php" class="text-info">&nbsp;Get Started</a></p>
																					</div>
									</div>
																	</section>
							</div>
								
<?php include 'footer2.php'; ?>