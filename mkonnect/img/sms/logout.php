<?php
session_start();
session_destroy();
$msg = "You have successfully logged out";
$link = 'index.php';
header( 'Location: '.$link );
?> 