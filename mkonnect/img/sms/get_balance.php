<?php 
$page = 'get_balance';
$pagetitle = 'Get Balance';
include 'head2.php'; 
include 'header2.php'; 
?>
<div class="wrapper">
								<section class="panel">
									<header class="panel-heading">
										<h3 class="text-info"><a href="get_balance.php" class="text-info">Get Balance</a></h3>
										<p class="block text-muted">This API call returns the SMS credit balance indicating the currently available SMS credits.</p>
									</header>
									<div class="scrollable wrapper m-b-none">
										<h4 class="text-info">API Endpoint</h4>
<p>The API service endpoint for making the <strong>Get Balance</strong> API call is:</p>
<pre><code class="http hljs "><span class="hljs-attribute">http://sms.uxt.co.ke/api/get_balance</span></code></pre>
<h4 class="text-info">API Request</h4>
<p>The API request is made via <strong>HTTP POST</strong> and <strong>must be url encoded</strong>. Some of the parameters are required while others are optional. The parameters are:</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="20%">Parameter</th>
			<th width="55%">Description</th>
			<th width="25%">Example</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>api_key</td>
			<td>Unique string specifying your API key.</td>
			<td>3aa67677e8bf1d4c8fe886a38c03a860</td>
		</tr>
		<tr>
			<td>api_format</td>
			<td>String specifying the expected response format, either <strong><em>JSON</em></strong> or <strong><em>XML</em></strong>. Default is <strong><em>XML</em></strong>.</td>
			<td>XML</td>
		</tr>
	</tbody>
</table>
<h5 class="text-info">HTTP POST Request</h5>
<pre class="m-b-none"><code class="http hljs "><span class="hljs-request">POST <span class="hljs-string">/ts/api/get_balance</span> HTTP/1.1</span>
<span class="hljs-attribute">Host</span>: <span class="hljs-string">sms.uxt.co.ke</span>
<span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/x-www-form-urlencoded</span>
<span class="hljs-attribute">Content-Length</span>: <span class="hljs-string">657</span></code></pre>
<pre class="m-t-n-sm wrapper"><code class="no-highlight">api_key=3aa67677e8bf1d4c8fe886a38c03a860&amp;api_format=XML</code></pre>
<h4 class="text-info">API Response</h4>
<p>The API reponse will be returned as either <strong>XML</strong> or <strong>JSON</strong>. Each response will contain a status and content section. The parameters are:</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Parameter</th>
			<th>Description</th>
			<th>Example</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="3"><strong>Status</strong></td>
		</tr>
		<tr>
			<td>code</td>
			<td>String specifying status code of the API Call result</td>
			<td>0</td>
		</tr>
		<tr>
			<td>type</td>
			<td>String specifying whether API Call executed successfully or failed</td>
			<td>SUCCESS</td>
		</tr>
		<tr>
			<td>description</td>
			<td>String specifying description of the status</td>
			<td>REQUEST_SUCCESSFUL</td>
		</tr>
		<tr>
			<td>meta</td>
			<td>String specifying additional information about the status</td>
			<td>SMS_AVAILABLE</td>
		</tr>
		<tr>
			<td colspan="3"><strong>Content</strong></td>
		</tr>
		<tr>
			<td>description</td>
			<td>String specifying description of the content</td>
			<td>2504256 SMS available.</td>
		</tr>
		<tr>
			<td>messages</td>
			<td>
				<p>String specifying the response results.</p>
				<p>It has <strong><em>message</em></strong> element with actual payload e.g. SMS credits balance</p>
			</td>
			<td>2504256</td>
		</tr>
	</tbody>
</table>
<h5 class="text-info">XML Response</h5>
<pre><code class="xml hljs "><span class="hljs-pi">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">response</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">status</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">code</span>&gt;</span>0<span class="hljs-tag">&lt;/<span class="hljs-title">code</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">type</span>&gt;</span>SUCCESS<span class="hljs-tag">&lt;/<span class="hljs-title">type</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">description</span>&gt;</span>REQUEST_SUCCESSFUL<span class="hljs-tag">&lt;/<span class="hljs-title">description</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">meta</span>&gt;</span>SMS_AVAILABLE<span class="hljs-tag">&lt;/<span class="hljs-title">meta</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">status</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">content</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">description</span>&gt;</span>2504256 SMS available.<span class="hljs-tag">&lt;/<span class="hljs-title">description</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">messages</span>&gt;</span>
		<span class="hljs-tag">&lt;<span class="hljs-title">message</span>&gt;</span>2504256<span class="hljs-tag">&lt;/<span class="hljs-title">message</span>&gt;</span>
	<span class="hljs-tag">&lt;/<span class="hljs-title">messages</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">content</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">response</span>&gt;</span></code></pre>
<h5 class="text-info">JSON Reponse</h5>
<pre><code class="json hljs ">{
&nbsp;&nbsp;"<span class="hljs-attribute">response</span>": <span class="hljs-value">{
&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">status</span>": <span class="hljs-value">{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"0"</span></span>,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"SUCCESS"</span></span>,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"REQUEST_SUCCESSFUL"</span></span>,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">meta</span>": <span class="hljs-value"><span class="hljs-string">"SMS_AVAILABLE"</span>
&nbsp;&nbsp;&nbsp;&nbsp;</span>}</span>,
&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">content</span>": <span class="hljs-value">{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"2504256 SMS available."</span></span>,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">messages</span>": <span class="hljs-value">{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"2504256"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>}
&nbsp;&nbsp;&nbsp;&nbsp;</span>}
&nbsp;&nbsp;</span>}
</span>}</code></pre>									</div>
																		<div class="row b-b m-l-none m-r-none">
										<hr class="m-t-none m-b-none">
										<div class="col-sm-5 wrapper pull-right">
																						<p class="block text-muted pull-right"><a href="receive_sms.php" class="text-info">Receive SMS&nbsp;</a></p>
																					</div>
										<div class="col-sm-5 wrapper">
																						<p class="block text-muted"><a href="send_sms.php" class="text-info">&nbsp;Send SMS</a></p>
																					</div>
									</div>
																	</section>
							</div><?php include 'footer2.php'; ?>