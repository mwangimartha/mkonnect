<?php

//redirects them to login page
$_SESSION['auth'] = false;

//end session
session_destroy();


header("Location: mkonnect.php");
?>
