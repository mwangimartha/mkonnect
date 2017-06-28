<?php
$username = 'root';
$password = 'dr67hj1'; //dr67$hj^swer9@
$host = 'localhost';
$myDB = 'sdp';
$link = mysql_connect($host,$username,$password);
$conn = mysql_select_db($myDB, $link) or die('CON Could not open database $myDB');
?>
