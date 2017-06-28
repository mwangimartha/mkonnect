<?php 
$page = 'sdk_perl';
$pagetitle = 'Perl SDK';
include 'head2.php'; 
include 'header2.php';
?>
<div class="wrapper">
								<section class="panel">
									<header class="panel-heading">
										<h3 class="text-info"><a href="sdk_perl.php" class="text-info">Perl SDK</a></h3>
										<p class="block text-muted">Our ready-made scripts help you connect your app or website to the UXT SMS gateway. Jump into the code. Get started with Perl!</p>
									</header>
									<div class="scrollable wrapper m-b-none">
										<div class="tabbable tabs_left">
	<ul class="tabs nav nav-pills">
		<li class="active"><a href="#send_sms" data-toggle="tab">Send SMS</a></li>
		<li><a href="#get_balance" data-toggle="tab">Get Balance</a></li>
		<li class="pull-right bg-warning"><a href="uxtsms_sdk_perl.zip"> Download SDK</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="send_sms">										
<pre><code class="perl hljs "><span class="hljs-comment">#!/usr/bin/perl</span>
<span class="hljs-comment"># Load API class</span>
<span class="hljs-keyword">use</span> UXTsms;
<span class="hljs-keyword">my</span> <span class="hljs-variable">$uxtsms</span> = new UXTsms; <span class="hljs-comment"># Instantiate API library</span>
<span class="hljs-comment"># Setup API credentials</span>
<span class="hljs-variable">$uxtsms</span>-&gt;{api_key} = <span class="hljs-string">"Your API Key"</span>; <span class="hljs-comment"># Check under Settings-&gt;API Keys in UXTsms</span>
<span class="hljs-comment"># Make API request</span>
<span class="hljs-variable">$uxtsms</span>-&gt;queue_sms(<span class="hljs-string">"+254723XXXXXX"</span>,<span class="hljs-string">"Message 1."</span>, <span class="hljs-string">"Sender_ID"</span>); <span class="hljs-comment"># Replace example with valid recipient, message and sender id</span>
<span class="hljs-variable">$uxtsms</span>-&gt;queue_sms(<span class="hljs-string">"+254733XXXXXX"</span>,<span class="hljs-string">"Message 2."</span>, <span class="hljs-string">"Sender_ID"</span>); <span class="hljs-comment"># Replace example with valid recipient, message and sender id</span>
<span class="hljs-variable">$uxtsms</span>-&gt;send_sms(); <span class="hljs-comment"># Initiate API call to send messages</span>
<span class="hljs-comment"># Get API response</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{status}; <span class="hljs-comment"># View status either (SUCCESS or FAIL)</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{message}; <span class="hljs-comment"># Returns SMS available (Credits balance)</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{description}; <span class="hljs-comment"># Returns a status message</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{response_xml}; <span class="hljs-comment"># Returns full xml response</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{response_json}; <span class="hljs-comment"># Returns full json response</span></code></pre>
		</div>
		<div class="tab-pane fade in" id="get_balance">
<pre><code class="perl hljs "><span class="hljs-comment">#!/usr/bin/perl</span>
<span class="hljs-comment"># Load API class</span>
<span class="hljs-keyword">use</span> UXTsms;
<span class="hljs-keyword">my</span> <span class="hljs-variable">$uxtsms</span> = new UXTsms; <span class="hljs-comment"># Instantiate API library</span>
<span class="hljs-comment"># Setup API credentials</span>
<span class="hljs-variable">$uxtsms</span>-&gt;{api_key} = <span class="hljs-string">"Your API Key"</span>; <span class="hljs-comment"># Check under Settings-&gt;API Keys in UXTsms</span>
<span class="hljs-comment"># Make API request</span>
<span class="hljs-variable">$uxtsms</span>-&gt;get_balance(); <span class="hljs-comment"># Initiate API call to check available messages</span>
<span class="hljs-comment"># Get API response</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{status}; <span class="hljs-comment"># View status either (SUCCESS or FAIL)</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{message}; <span class="hljs-comment"># Returns SMS available (Credits balance)</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{description}; <span class="hljs-comment"># Returns a status message</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{response_xml}; <span class="hljs-comment"># Returns full xml response</span>
<span class="hljs-keyword">print</span> <span class="hljs-variable">$uxtsms</span>-&gt;{response_json}; <span class="hljs-comment"># Returns full json response</span></code></pre>			
		</div>
	</div>
</div>									</div>
																		<div class="row b-b m-l-none m-r-none">
										<hr class="m-t-none m-b-none">
										<div class="col-sm-5 wrapper pull-right">
																						<p class="block text-muted pull-right"><a href="sdk_csharp.php" class="text-info">C# SDK&nbsp;</a></p>
																					</div>
										<div class="col-sm-5 wrapper">
																						<p class="block text-muted"><a href="sdk_ruby.php" class="text-info">&nbsp;Ruby SDK</a></p>
																					</div>
									</div>
																	</section>
							</div><?php include 'footer2.php'; ?>