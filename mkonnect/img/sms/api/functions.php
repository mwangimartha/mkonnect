<?php 
function send_sms($msisdn, $sms, $sender, $category = 'smsapi'){
	include_once 'db.php';
	$sql = "SELECT * FROM ".SUB_TABLE." WHERE `msisdn` = '".$msisdn."' LIMIT 1"; //echo $sql; exit;
	$result = mysql_query($sql);
    while($row = mysql_fetch_array($result)) { $dest_msisdn = $row['msisdn']; $service_id = $row['service_id']; }
	if($dest_msisdn != ''){
		$query = "INSERT INTO outgoing_sms (`dest_msisdn`,`text_message`,`sender_name`,`service_id`,`category`)";
        $query .= "VALUES ('".$dest_msisdn."','".$sms."','".$sender."','".$service_id."','".$category."')";
        mysql_query($query);
	}
}

function send_bulk_sms($msisdn, $sms){
	include_once 'db.php';
	$query = "INSERT INTO outgoing_sms_bulk (`dest_msisdn`,`text_message`,`sender_name`,`service_id`)";
	$query .= "VALUES ('".$dest_msisdn."','".$sms."','".BULK_SENDER."','".BULK_SERVICEID."')";
	mysql_query($query);
}
?>