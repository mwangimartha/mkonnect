<?php
error_reporting(E_ALL);
ini_set('display_errors','Off');
include 'db.php';
$query = "SELECT * FROM api_incoming_sms WHERE processed = 0";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)) { 
	$query1 = "SELECT `userid` FROM `api_services` WHERE `serviceid` = '".$row['service_id']."' LIMIT 1";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_array($result1)) { $userid = $row1; }
	$query2 = "SELECT smscallback FROM api_users WHERE id = '".$userid['userid']."' LIMIT 1";
	$result2 = mysql_query($query2);
	while($row2 = mysql_fetch_array($result2)) { $url = $row2; }
	$api_url = $url['smscallback'];
	$fields = array(
		'from' => urlencode($row['dest_msisdn']),
		'to' => urlencode($row['sender_name']),
		'text' => urlencode($row['text_message']),
		'date' => urlencode($row['in_date']),
		'id' => urlencode($row['id']),
		'serviceid' => urlencode($row['service_id']),
		'linkid' => urlencode($row['link_id'])
	);
	$fields_string = '';
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	$fields_string = substr($fields_string,0,-1);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $api_url);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$results = curl_exec($ch);
	curl_close($ch);
	$query3 = "UPDATE `api_incoming_sms` SET `callbackurl` = '".$api_url."', `callbackurl_response` = '".mysql_real_escape_string($results)."', `processed` = '1' WHERE id = '".$row['id']."'";
	mysql_query($query3);
	if($_GET['echo'] == 1){
		echo "SMS ID ".$row['id']." <br>API URL: $api_url <br>Params: $fields_string <br> Results: $results <br><hr>";
	}
}