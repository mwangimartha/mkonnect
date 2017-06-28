<?php
require ("db.php");
if((int)$_SESSION['userid'] != 0) { 
	$query = "UPDATE `api_users` SET `api_key` = MD5('".generate_code()."') WHERE `id` = '".$_SESSION['userid']."' LIMIT 1";
	mysql_query($query);
	$msg = "API Key Successfully Changed";
} else {
	$msg = "Invalid Data Parsed";
}
$link = "sys_apikey.php";
$_SESSION['msg'] = $msg;
header( 'Location: '.$link );

function generate_code($length = 10, $chars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890')
{
	$chars_length = (strlen($chars) - 1);
	$string = $chars{rand(0, $chars_length)};
	for ($i = 1; $i < $length; $i = strlen($string))
    {
    	$r = $chars{rand(0, $chars_length)};
    	if ($r != $string{$i - 1}) $string .=  $r;
    }
    return $string;
}