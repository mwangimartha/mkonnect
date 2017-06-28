<?php 
$page = 'send_sms';
$pagetitle = 'Send SMS';
include 'head2.php'; 
include 'header2.php'; 
?>

<div class="wrapper">
								<section class="panel">
									<header class="panel-heading">
										<h3 class="text-info"><a href="send_sms.php" class="text-info">Send SMS</a></h3>
										<p class="block text-muted">This API call sends or schedules one or more SMS messages for delivery to one or more specified recipients using a default or registered Sender ID.</p>
									</header>
									<div class="scrollable wrapper m-b-none">
										<h4 class="text-info">API Endpoint</h4>
<p>The API service endpoint for making the <strong>Send SMS</strong> API call is:</p>
<pre><code class="http hljs "><span class="hljs-attribute">http://sms.uxt.co.ke/api/send_sms</span></code></pre>
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
		<tr>
			<td>messages</td>
			<td><p>String specifying the messages to be sent.</p>
			<p>All messages are wrapped in a <strong><em>request</em></strong> element having one or more <strong><em>sms</em></strong> elements.</p>
				<p>Each <strong><em>sms</em></strong> element has a <strong><em>recipient</em></strong>, <strong><em>message</em></strong>, <strong><em>sender</em></strong> and <strong><em>scheduled_date</em></strong> element.</p>
				
			</td>
			<td>%3Crequest%3E%0A+%3Csms%3E%0A++%3Crecipient%3E%2B25472212356%3C%2F
			recipient%3E%0A++%3Cmessage%3EThis+is+an+unscheduled+message%3C%2F
			message%3E%0A++%3Csender%3E%3C%2Fsender%3E%0A++%3C
			scheduled_date%3E%3C%2Fscheduled_date%3E%0A+%3C%2Fsms%3E%0A+%3Csms%3E%0A++%3C
			recipient%3E%2B25473312356%3C%2Frecipient%3E%0A++%3C
			message%3EThis+is+a+scheduled+message%3C%2Fmessage%3E%0A++%3C
			sender%3ESENDER_ID%3C%2Fsender%3E%0A++%3Cscheduled_date%3E2015-01-28+18%3A45%3A00%3C%2F
			scheduled_date%3E%0A+%3C%2Fsms%3E%0A%3C%2Frequest%3E</td>
		</tr>
		</tbody>
</table>
		<h5 class="text-info">Messages Parameters</h5>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Element</th>
							<th>Description</th>
							<th>Required</th>
							<th>Example</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="4">request</td>
						</tr>
						<tr>
							<td colspan="4">sms</td>
						</tr>
						<tr>
							<td>recipient</td>
							<td>String specifying the mobile number of recipient in <strong><em>international format</em></strong> starting with country code but <strong>without a plus sign</strong>.</td>
							<td>YES</td>
							<td>254722123456</td>
						</tr>
						<tr>
							<td>message</td>
							<td>String specifying the message to be sent</td>
							<td>YES</td>
							<td>This is a very serious message</td>
						</tr>
						<tr>
							<td>sender</td>
							<td>String specifying the alpha-numeric or numeric sender ID. This can be set up from you UXT SMS Dashboard.</td>
							<td>YES</td>
							<td>SENDER_ID</td>
						</tr>
						<tr>
							<td>serviceid</td>
							<td>Integer for specifying the service to be used to send the message. Useful for different services on the same numeric Sender ID</td>
							<td>YES</td>
							<td>6015452000109549</td>
						</tr>
						<tr>
							<td>linkid</td>
							<td>Integer for specifying the link to a received message. Used when responding to an on-demand message coming in via shortcode / numeric Sender ID</td>
							<td>NO</td>
							<td>150109548</td>
						</tr>
						<tr>
							<td>scheduled_date</td>
							<td>String specifying the date and time a message is to be delivered. Should remain blank unless the message is to be scheduled. The expected date format is <strong><em>YYYY-MM-DD HH:mm:ss</em></strong></td>
							<td>NO</td>
							<td>2015-01-28 18:45:00</td>
						</tr>
					</tbody>
				</table>
				<p>Example of the structure of the <strong><em>messages</em></strong> value in XML.</p>
				<pre><code class="xml hljs "><span class="hljs-tag">&lt;<span class="hljs-title">request</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-title">sms</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">recipient</span>&gt;</span>25472212356<span class="hljs-tag">&lt;/<span class="hljs-title">recipient</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">message</span>&gt;</span>This is an unscheduled message<span class="hljs-tag">&lt;/<span class="hljs-title">message</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">sender</span>&gt;</span>22258<span class="hljs-tag">&lt;/<span class="hljs-title">sender</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">serviceid</span>&gt;</span>6015452000109549<span class="hljs-tag">&lt;/<span class="hljs-title">serviceid</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">linkid</span>&gt;</span>150109548<span class="hljs-tag">&lt;/<span class="hljs-title">linkid</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">scheduled_date</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">scheduled_date</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-title">sms</span>&gt;</span>
 <span class="hljs-tag">&lt;<span class="hljs-title">sms</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">recipient</span>&gt;</span>25473312356<span class="hljs-tag">&lt;/<span class="hljs-title">recipient</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">message</span>&gt;</span>This is a scheduled message<span class="hljs-tag">&lt;/<span class="hljs-title">message</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">sender</span>&gt;</span>SENDER_123<span class="hljs-tag">&lt;/<span class="hljs-title">sender</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">serviceid</span>&gt;</span>6015452000109548<span class="hljs-tag">&lt;/<span class="hljs-title">serviceid</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">linkid</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">linkid</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">scheduled_date</span>&gt;</span>2015-01-28 18:45:00<span class="hljs-tag">&lt;/<span class="hljs-title">scheduled_date</span>&gt;</span>
 <span class="hljs-tag">&lt;/<span class="hljs-title">sms</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">request</span>&gt;</span></code></pre>
				<p>The actual <strong><em>messages</em></strong> value <strong>must be url encoded</strong> as shown in the parameters example</p>
			
<h5 class="text-info">HTTP POST Request</h5>
<pre class="m-b-none"><code class="http hljs "><span class="hljs-request">POST <span class="hljs-string">/api/send_sms</span> HTTP/1.1</span>
<span class="hljs-attribute">Host</span>: <span class="hljs-string">sms.uxt.co.ke</span>
<span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/x-www-form-urlencoded</span>
<span class="hljs-attribute">Content-Length</span>: <span class="hljs-string">657</span></code></pre>
<pre class="m-t-n-sm wrapper"><code class="no-highlight">api_key=3aa67677e8bf1d4c8fe886a38c03a860&amp;api_format=XML&amp;messages=%3Crequest%3E%0A+%3Csms%3E%0A++%3Crecipient%3E%2B25472212356%3C%2Frecipient%3E%0A++%3Cmessage%3EThis+is+an+unscheduled+message%3C%2Fmessage%3E%0A++%3Csender%3E%3C%2Fsender%3E%0A++%3Cscheduled_date%3E%3C%2Fscheduled_date%3E%0A+%3C%2Fsms%3E%0A+%3Csms%3E%0A++%3Crecipient%3E%2B25473312356%3C%2Frecipient%3E%0A++%3Cmessage%3EThis+is+a+scheduled+message%3C%2Fmessage%3E%0A++%3Csender%3ESENDER_123%3C%2Fsender%3E%0A++%3Cscheduled_date%3E2015-01-28+18%3A45%3A00%3C%2Fscheduled_date%3E%0A+%3C%2Fsms%3E%0A%3C%2Frequest%3E</code></pre>
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
			<td>SMS_QUEUE</td>
		</tr>
		<tr>
			<td colspan="3"><strong>Content</strong></td>
		</tr>
		<tr>
			<td>description</td>
			<td>String specifying description of the content</td>
			<td>2 messages queued. 4 SMS deducted, 2504256 SMS available.</td>
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
	<span class="hljs-tag">&lt;<span class="hljs-title">meta</span>&gt;</span>SMS_QUEUE<span class="hljs-tag">&lt;/<span class="hljs-title">meta</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">status</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">content</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-title">description</span>&gt;</span>2 messages queued. 4 SMS deducted, 2504256 SMS available.<span class="hljs-tag">&lt;/<span class="hljs-title">description</span>&gt;</span>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">meta</span>": <span class="hljs-value"><span class="hljs-string">"SMS_QUEUE"</span>
&nbsp;&nbsp;&nbsp;&nbsp;</span>}</span>,
&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">content</span>": <span class="hljs-value">{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"2 messages queued. 4 SMS deducted, 2504256 SMS available."</span></span>,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">messages</span>": <span class="hljs-value">{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"2504256"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>}
&nbsp;&nbsp;&nbsp;&nbsp;</span>}
&nbsp;&nbsp;</span>}
</span>}</code></pre>									</div>
																		<div class="row b-b m-l-none m-r-none">
										<hr class="m-t-none m-b-none" />
										<div class="col-sm-5 wrapper pull-right">
																						<p class="block text-muted pull-right"><a href="get_balance.php" class="text-info">Get Balance&nbsp;</a></p>
																					</div>
										<div class="col-sm-5 wrapper">
																						<p class="block text-muted"><a href="api_credentials.php" class="text-info">&nbsp;API Credentials</a></p>
																					</div>
									</div>
																	</section>
							</div>
															
<?php include 'footer2.php'; ?>