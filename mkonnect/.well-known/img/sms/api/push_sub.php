<?php
error_reporting(E_ALL);
ini_set('display_errors','Off');
include 'db.php';
$query = "SELECT `t1`.*,`t2`.`subcallback` FROM `api_services` AS `t1` LEFT JOIN `api_users` AS `t2` ON `t1`.`userid` = `t2`.`id` WHERE `t1`.`servicetype` = 'subscription'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$query1 = "SELECT `id`,`msisdn` FROM `api_subscribers` WHERE `service_id` = '".$row['serviceid']."' AND `msisdn` NOT IN (SELECT `msisdn` FROM `".$row['subtable']."` WHERE `service_id` = '".$row['serviceid']."')";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_array($result1)) {
		$api_url = $row['subcallback'];
		if($api_url != ''){
			$fields = array(
				'phoneNumber' => urlencode($row1['msisdn']),
				'shortCode' => urlencode($row['shortcode']),
				'serviceid' => urlencode($row['serviceid']),
				'updateType' => urlencode('deletion')
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
			$query3 = "DELETE FROM `api_subscribers` WHERE id = '".$row1['id']."'";
			mysql_query($query3);
			
		}
		if($_GET['echo'] == 1){
			echo "Sub ID ".$row['id']." <br>API URL: $api_url <br>Params: $fields_string <br> Results: $results <br><hr>";
		}
	}
	
	$query2 = "SELECT `msisdn` FROM `".$row['subtable']."` WHERE `service_id` = '".$row['serviceid']."' AND `msisdn` NOT IN (SELECT `msisdn` FROM `api_subscribers` WHERE `service_id` = '".$row['serviceid']."')";
	$result2 = mysql_query($query2);
	while($row2 = mysql_fetch_array($result2)) {
		$api_url = $row['subcallback'];
		if($api_url != ''){
			$fields = array(
				'phoneNumber' => urlencode($row2['msisdn']),
				'shortCode' => urlencode($row['shortcode']),
				'serviceid' => urlencode($row['serviceid']),
				'updateType' => urlencode('addition')
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
			$query4 = "INSERT INTO `api_subscribers` SET `msisdn` = '".$row2['msisdn']."',`service_id` = '".$row['serviceid']."',`short_code` = '".$row['shortcode']."',`status` = '1', `callbackurl` = '".$api_url."', `callbackurl_response` = '".mysql_real_escape_string($results)."'";
			mysql_query($query4);	
		}
		if($_GET['echo'] == 1){
			echo "Sub ID ".$row['id']." <br>API URL: $api_url <br>Params: $fields_string <br> Results: $results <br><hr>";
		}
	}
}