<?php
$cat_id = $_POST['id'];

session_start();
$_SESSION['category'] = $cat_id;
 echo json_encode($_SESSION['category'])
 ?>
