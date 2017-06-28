<?php   
require ("db.php");
session_destroy();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
 	<!--<link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> -->
  <link rel="stylesheet" type="text/css" href="css/materialize.css"> 
  <link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
  	
 
  <!--  <link href="css/animate.css" rel="stylesheet"> 
    <link href="css/site.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
	

 	<title>
 		<?php
 		require_once 'title.php';
 		?>
 	</title>	
 </head>
 <body>
 <div class="mkondo" style="background-color: ">
 <div class="conectheader" style="background-color:" >
 	<div class="logotop" style="float:left; background-color:">
 		<img src="img/logo.jpg">
 	<!--</div> -->
 		<div class="divmko" style="float:right;text-decoration: none;padding-top: -150px;padding-left: 400px;" >
 		<p class="mkodiv" style="font-size: 25px;text-decoration: none;">
 			<strong><a href="home.php">Home &nbsp </a></strong>
 			<strong><a href="shortcode.php">Short Code &nbsp </a></strong>
 			<strong><a href="aboutus.php">About Us &nbsp </a></strong>
 			<strong><a href="#sales">Register &nbsp</a></strong>
 		</p>
 		
 		</div>

  </div>
  </div>
 </div>
<div class="eduj" style="height: 45px;border-radius: 15px;background-color: gold;background-image: url('')">
 	<div class="fjobsf" style="padding-top:50px;">
 	<h2>Instantly Find jobs Here..</h2> 
 	<p style="font-size: 15px;">Job Category </p>
 		<input list="category" name="category" placeholder="Job Category" style=" border-radius: 5px;border-color:black;width:200px;padding-top: -68px;">
 		<datalist id="category" style="width:50px;">
 			<option value="Accounting">
 			<option value="Informataion Technology">
 			<option value ="Retail">
 			<option value ="Sales & Marketing">
 			<option value ="Tourism & Travell">
 			<option value ="Government">
 			<option value ="Trade Services">
 			<option value ="Insurance">
 			<option value ="Security Services">
 
 		</datalist>
 	
 	<div class="location" style="border-color: black; margin-top: -65px;margin-right: 600px;">	
 		<p style="font-size: 15px;margin-bottom: 10px;">Location</p>
 			<input list="location" name="location" placeholder="Location" style="border-radius: 5px;border-color:black;padding-right:100px;padding-top: 20px;">
 		<datalist id="location" style="float: left;">
 			<option value="Nairobi">
 			<option value="Kisumu">
 			<option value ="Kitale">
 			<option value ="Mombasa">
 			<option value ="Machakos">
 			<option value ="Nakuru">
 			<option value ="Moyale">
 			<option value ="Eldoret">
 			<option value ="Molo">
 		</datalist>
 		<button  class="btn-sub-jobs" type="submit" name="Find A Job" style="width:200px;border-radius: 20px;">Find  job</button>
 	</div>
 	</div>
</div>
 <div class="mcenter" style="position:center;width:55px;border-color: grey;">
 <div class="mcenter-img">
 	<img src="">
 </div>
 </div>
 
 </body>
 </html>






























