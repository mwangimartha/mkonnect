<?php 
include 'db.php';


 ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Employer Registration | register and post jobs..</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="WOWSlider" />
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="HandheldFriendly" content="true">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="canonical" href="https://www.mkonnect.co.ke" />
    <!--w3 css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  	<link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
  	<link rel="stylesheet" type="text/css" href="css/materialize.css"> 
  	<link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
	 <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/pagetransitions.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>

		<!--top nav bar here-->
		<nav>
		<div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="img/icons/imageedit_4_7060829937.png" style="width: 200px;"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
 			<li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
 			<li><strong><a href="mkonnectn1.php">Home &nbsp &nbsp &nbsp &nbsp </a></strong></li>
 			<li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
 			<li><strong><a href="postjob.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>
 			
 			</ul>
      <ul class="side-nav" id="mobile-demo">
        <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="mkonnectn1.php">Home &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="postjob.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>  
      </ul>
 		</div>

	</nav><!--end of nav-->
	<div class="container">
  <div class="row">
  <div class="card-panel">
  <h4>About Our Terms And Conditions</h4>
<h3>Terms and Conditions ("Terms")</h3>
Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the mkonnect.co.ke website (the "Service") operated by Mkonnect.
Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.
By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. This Terms & Conditions agreement is licensed by TermsFeed to Mkonnect.
<h3>Accounts</h3>
<p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.
You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.
You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
<h3>Links To Other Web Sites</h3>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Mkonnect.
Mkonnect has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Mkonnect shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.
We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
<h3>Termination</h3>
<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.
All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.
We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.
Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.
All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<h3>Governing Law</h3>
<p>These Terms shall be governed and construed in accordance with the laws of KENYA, without regard to its conflict of law provisions.
Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
<h3>Changes</h3>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>


</div>
</div>
</div>






	<!--beginning of footer.....Edited By David on 28/04/2017 @ 9:11 am-->
<footer class="page-footer" style="background-color: rgb(8,8,8);margin-top: 50px;">
<div class="row">
<div class="col m3">
  <p style="font-size: 20px;">Our Mission & Vission</p>
  <p>At mkonnect we link the employer and the job seeker.
  Profile matching employer and job seekers according to
  employers requirements and the job seekers qualification.</p>
</div><!--end of col md4-->
<div class="col m3">
  <p style="font-size: 20px;">Connect With Us on:</p>
  <p><img src="img/icons/soc_fb.png" style="width: 15px;height: 15px;">&nbsp &nbsp <a href="#">facebook</a></p>
  <p><img src="img/icons/soc_gplus.png" style="width: 15px;height: 15px;">&nbsp &nbsp <a href="#">google +</a></p>
  <p><img src="img/icons/soc_tw.png" style="width: 15px;height: 15px;">&nbsp &nbsp <a>twitter</a></p>
  <p><img src="img/icons/soc_in.jpg" style="width: 15px;height: 15px;">&nbsp &nbsp <a>linkedIn</a></p>
</div>
<div class="col m3">
	<p style="font-size: 25px;">Important links</p>
	<!--p><a href="#2">Terms and Conditions</a></p-->
	<p><a href="#2">Privacy Policy</a></p>
	<p><a href="#2">FAQs.</a></p>
</div>
<div class="col m3">
  <p style="font-size: 25px;">Contact Info:</p>
  <p><img src="img/icons/address.jpg" style="width: 20px;height: 20px;"> &nbsp    Bemuda plaza,Ngong Rd,Block A | 4th Floor,Left Wing | P.O.Box uxt-00100,Nairobi.</p>
  <p><img src="img/icons/cont.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp Phone:0000100024550</p>
  <p><img src="img/icons/email.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp info@mkonnect.co.ke</p>
</div>
</div><!--end of class row-->          
<div class="row">
<div class="col m12">
<p class="white-text">Copyright  &copy<?php
    require_once 'footertitle.php'
    ?>Mkonnect&reg.<br>All Rights Reserved</p>
</div>
</div>
</footer><!--end of footer here-->		
	</body>
</html>
