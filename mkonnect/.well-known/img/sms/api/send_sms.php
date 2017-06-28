<?php
error_reporting(E_ALL);
ini_set('display_errors','Off');
include 'db.php';
$api_key = $_REQUEST['api_key'];
$api_format = strtolower($_REQUEST['api_format']);
$messagesxml = $_REQUEST['messages'];
if(!$api_format){ $api_format = 'xml'; }

$query = "SELECT * FROM `api_users` WHERE `api_key` = '".$api_key."' LIMIT 1";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){ $user = $row; }
if(!$user['id']) {
	echo '<?xml version="1.0" encoding="ISO-8859-1"?>
<response>
<status>
<code>2</code>
	<type>FAILED</type>
	<description>REQUEST_FAILED</description>
</status>
<content>
	<description>Invalid API Key</description>
</content>
</response>';
} else {
	$api_user = $user['id'];
	$messagesxml = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $messagesxml);
	$messages=simplexml_load_string($messagesxml);
	if(!$messages) {
		echo '<?xml version="1.0" encoding="ISO-8859-1"?>
	<response>
	<status>
	<code>1</code>
		<type>FAILED</type>
		<description>REQUEST_FAILED</description>
	</status>
	<content>
		<description>Malformed messages parameter</description>
	</content>
	</response>';
	} else {
		$json = json_encode($messages);
		$smss = json_decode($json,TRUE);
		//echo '<pre>'; var_dump($smss['sms']); echo '</pre>';
		$que = 0;
		
		if($smss['sms']['recipient'] != ''){
			$smss_ = array();
			$smss_[] = $smss['sms'];
		} else {
			$smss_ = $smss['sms'];
		}
		
		foreach($smss_ as $sms){
			if (DateTime::createFromFormat('Y-m-d H:i:s', $sms['scheduled_date']) == FALSE) { $scheduledate = date('Y-m-d H:i:s'); } 
			else { $scheduledate = $sms['scheduled_date']; } 
			if(is_array($sms['linkid'])) { $linkid = ''; } else { $linkid = $sms['linkid']; }
			$query = "INSERT INTO `api_outgoing_sms` SET 
			`api_user` = '".$api_user."',
			`api_key` = '".$api_key."',
			`msisdn` = '".$sms['recipient']."',
			`smstext` = '".mysql_real_escape_string(stripslashes($sms['message']))."', 
			`sender` = '".$sms['sender']."', 
			`serviceid` = '".$sms['serviceid']."', 
			`linkid` = '".$linkid."', 
			`schedule_date` = '".$scheduledate."'";
			//echo $query; exit;
			mysql_query($query);
			$sms_id = mysql_insert_id();
			$que++;
			
			$timestamp = strtotime($scheduled_date);
			$now = strtotime("now");
			
			if($now >= $timestamp){
				/* if(strlen($sms['sender']) > 0 && (int)$sms['sender'] == 0) {
					$query = "INSERT INTO sdp.outgoing_sms_bulk (`dest_msisdn`,`text_message`,`sender_name`,`service_id`)";
					$query .= "VALUES ('".$sms['recipient']."','".mysql_real_escape_string(stripslashes($sms['message']))."','".$sms['sender']."','".$sms['serviceid']."')";
				}
				elseif(strlen($sms['sender']) > 0 && (int)$sms['sender'] > 0) { */
					$query = "INSERT INTO sdp.outgoing_sms (`dest_msisdn`,`text_message`,`sender_name`,`service_id`,`link_id`)";
					$query .= "VALUES ('".$sms['recipient']."','".mysql_real_escape_string(stripslashes($sms['message']))."','".$sms['sender']."','".$sms['serviceid']."','".$linkid."')";
				//}
				mysql_query($query);
				$query2 = "UPDATE `api_outgoing_sms` SET `sent` = '1' WHERE `id` = '".$sms_id."'";
				mysql_query($query2);
			}
		}
		echo '<?xml version="1.0" encoding="ISO-8859-1"?>
	<response>
	<status>
	<code>0</code>
		<type>SUCCESS</type>
		<description>REQUEST_SUCCESSFUL</description>
	</status>
	<content>
		<description>'.$que.' message(s) queued</description>
	</content>
	</response>';
	}
}