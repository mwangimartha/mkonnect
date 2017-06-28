<?php 
$page = 'sdk_php';
$pagetitle = 'PHP SDK';
include 'head2.php'; 
include 'header2.php'; 
?>
<div class="wrapper">
								<section class="panel">
									<header class="panel-heading">
										<h3 class="text-info"><a href="sdk_php.php" class="text-info">PHP SDK</a></h3>
										<p class="block text-muted">Our ready-made scripts help you connect your app or website to the UXT SMS gateway. Jump into the code. Get started with PHP!</p>
									</header>
									<div class="scrollable wrapper m-b-none">
										<div class="tabbable tabs_left">
	<ul class="tabs nav nav-pills">
		<li class="active"><a href="#send_sms" data-toggle="tab">Send SMS</a></li>
		<li><a href="#send_sms_bulk" data-toggle="tab">Send Bulk SMS</a></li>
		<li><a href="#get_balance" data-toggle="tab">Get Balance</a></li>
		<li class="pull-right bg-warning"><a href="uxtsms_sdk_php.zip"> Download SDK</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="send_sms">										
<pre><code class="php hljs "><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-comment"># Load API class</span>
<span class="hljs-keyword">require</span> <span class="hljs-string">"uxtsms.php"</span>;
<span class="hljs-comment"># Setup API credentials</span>
<span class="hljs-variable">$api_key</span> = <span class="hljs-string">'Your API Key'</span>; <span class="hljs-comment"># Check under Settings-&gt;API Keys in uxtsms</span>
<span class="hljs-variable">$senderid</span> = <span class="hljs-string">'Sender ID'</span>; <span class="hljs-comment"># Check under Services in uxtsms - Please ensure that they tally with Service ID</span>
<span class="hljs-variable">$serviceid</span> = <span class="hljs-string">'Service ID'</span>; <span class="hljs-comment"># Check under Services in uxtsms - Please ensure that they tally with Sender ID</span>
<span class="hljs-comment"># Make API request</span>
<span class="hljs-variable">$uxtsms</span> = <span class="hljs-keyword">new</span> uxtsms(<span class="hljs-variable">$api_key</span>); <span class="hljs-comment"># Instantiate API library</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;queue_sms</span>(<span class="hljs-string">"+254723XXXXXX"</span>, <span class="hljs-string">"Message 1."</span>, <span class="hljs-variable">$senderid</span>, <span class="hljs-variable">$serviceid</span>); <span class="hljs-comment"># Replace example with valid recipient, message, sender id and service id</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;queue_sms</span>(<span class="hljs-string">"+254733XXXXXX"</span>, <span class="hljs-string">"Message 2."</span>, <span class="hljs-variable">$senderid</span>, <span class="hljs-variable">$serviceid</span>); <span class="hljs-comment"># Replace example with valid recipient, message, sender id and service id</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;send_sms</span>(); <span class="hljs-comment"># Initiate API call to send messages</span>
<span class="hljs-comment"># Get API response</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;status</span>; <span class="hljs-comment"># View status either (SUCCESS or FAIL)</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;description</span>; <span class="hljs-comment"># Returns a status message</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;response_xml</span>; <span class="hljs-comment"># Returns full xml response</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;response_json</span>; <span class="hljs-comment"># Returns full json response</span></code></pre>
		</div>
		<div class="tab-pane fade in" id="send_sms_bulk">										
<pre><code class="php hljs "><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-comment"># Load API class</span>
<span class="hljs-keyword">require</span> <span class="hljs-string">"uxtsms.php"</span>;
<span class="hljs-comment"># Setup API credentials</span>
<span class="hljs-variable">$api_key</span> = <span class="hljs-string">'Your API Key'</span>; <span class="hljs-comment"># Check under Settings-&gt;API Keys in uxtsms</span>
<span class="hljs-variable">$sender</span> = <span class="hljs-string">'Sender'</span>; <span class="hljs-comment"># Check under Alphanumerics in uxtsms - Please ensure that they tally with Service ID and Sender ID</span>
<span class="hljs-variable">$senderid</span> = <span class="hljs-string">'Sender ID'</span>; <span class="hljs-comment"># Check under Services in uxtsms - Please ensure that they tally with Service ID and Sender</span>
<span class="hljs-variable">$serviceid</span> = <span class="hljs-string">'Service ID'</span>; <span class="hljs-comment"># Check under Services in uxtsms - Please ensure that they tally with Sender ID and Sender</span>
<span class="hljs-comment"># Make API request</span>
<span class="hljs-variable">$uxtsms</span> = <span class="hljs-keyword">new</span> uxtsms(<span class="hljs-variable">$api_key</span>); <span class="hljs-comment"># Instantiate API library</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;queue_sms</span>(<span class="hljs-string">"+254723XXXXXX"</span>, <span class="hljs-string">"Message 1."</span>, <span class="hljs-variable">$sender</span>, <span class="hljs-variable">$serviceid</span>, <span class="hljs-variable">$senderid</span>); <span class="hljs-comment"># Replace example with valid recipient, message, sender id and service id</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;queue_sms</span>(<span class="hljs-string">"+254733XXXXXX"</span>, <span class="hljs-string">"Message 2."</span>, <span class="hljs-variable">$sender</span>, <span class="hljs-variable">$serviceid</span>, <span class="hljs-variable">$senderid</span>); <span class="hljs-comment"># Replace example with valid recipient, message, sender id and service id</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;send_sms_bulk</span>(); <span class="hljs-comment"># Initiate API call to send messages</span>
<span class="hljs-comment"># Get API response</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;status</span>; <span class="hljs-comment"># View status either (SUCCESS or FAIL)</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;description</span>; <span class="hljs-comment"># Returns a status message</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;response_xml</span>; <span class="hljs-comment"># Returns full xml response</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;response_json</span>; <span class="hljs-comment"># Returns full json response</span></code></pre>
		</div>
		<div class="tab-pane fade in" id="get_balance">
<pre><code class="php hljs "><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-comment"># Load API class</span>
<span class="hljs-keyword">require</span> <span class="hljs-string">"uxtsms.php"</span>;
<span class="hljs-comment"># Setup API credentials</span>
<span class="hljs-variable">$api_key</span> = <span class="hljs-string">'Your API Key'</span>; <span class="hljs-comment"># Check under Settings-&gt;API Keys in uxtsms</span>
<span class="hljs-comment"># Make API request</span>
<span class="hljs-variable">$uxtsms</span> = <span class="hljs-keyword">new</span> uxtsms(<span class="hljs-variable">$api_key</span>); <span class="hljs-comment"># Instantiate API library</span>
<span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;get_balance</span>(); <span class="hljs-comment"># Initiate API call to check available SMS credits</span>
<span class="hljs-comment"># Get API response</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;status</span>; <span class="hljs-comment"># View status either (SUCCESS or FAIL)</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;message</span>; <span class="hljs-comment"># Returns SMS available (Credits balance)</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;description</span>; <span class="hljs-comment"># Returns a status message</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;response_xml</span>; <span class="hljs-comment"># Returns full xml response</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$uxtsms</span><span class="hljs-variable">-&gt;response_json</span>; <span class="hljs-comment"># Returns full json response</span></code></pre>			
		</div>
	</div>
</div>									</div>
																		<div class="row b-b m-l-none m-r-none">
										<hr class="m-t-none m-b-none">
										<div class="col-sm-5 wrapper pull-right">
																						<p class="block text-muted pull-right"><a href="sdk_python.php" class="text-info">Python SDK&nbsp;</a></p>
																					</div>
										<div class="col-sm-5 wrapper">
																						<p class="block text-muted"><a href="get_balance.php" class="text-info">&nbsp;Get Balance</a></p>
																					</div>
									</div>
																	</section>
							</div><?php include 'footer2.php'; ?>