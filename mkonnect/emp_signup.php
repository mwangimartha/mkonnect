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
  <script type="text/javascript" src="js/jquerymkon.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/pagetransitions.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
	<body>	



  </script>

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
  <div class="col m2">
  </div>
  <div class="col m8" style="box-sizing: border-box;border:groove;border-color: grey;box-shadow:10px 10px 5px #888;">
  <!--input type="file" accept="video/*" capture="camcorder"/-->
  <div class="card-panel">
  <h3><center>Employer Registration</center></h3>
  <h5><center>Personal Information</center></h5>
  <form action="" method="post">
  <label>Email Address</label>
  <input type="email" name="email" placeholder="Enter Email" required="">
  <label>Enter Password</label>
  <input type="password" name="password" placeholder="Enter password" required="">
  <label>First Name</label>
  <input type="text" name="fname" placeholder="First Name" required="">
  <label>Last Name</label>
  <input type="text" name="lname" placeholder="Last Name" required="">
  <label>Code</label>
  <select id="code">
    <option value="+250">+250</option>
    <option value="+251">+251</option>
    <option value="+252">+252</option>
    <option value="+253">+253</option>
    <option value="+254">+254</option>
    <option value="+255">+255</option>
    <option value="+256">+256</option>
    <option value="+257">+257</option>
    <option value="+258">+258</option>
    <option value="+259">+259</option>
    <option value="+260">+260</option>
    <option value="+261">+261</option>
  </select>
   </form> 
   </div>
   <div class="collapsible" data-collapsible="accordion">
   <div class="collapsible-header"><center><button class="btn btn-block">Click To Fill Out Company Details</button></center>
   <div class="collapsible-body">
   <div class="card-panel">
   <h5><center>Company Details</center></h5>
   <label>Company Name:</label>
   <input type="text" name="co_name" placeholder="company Name" required="">
   <label>Contact Person</label>
   <input type="text" name="con_person" placeholder="Contact Person" required="">
   <label>Country</label>
   <input type="text" name="country" placeholder="Country" required="">
   <label><p>Notifiation Email<h6>*Note email can be same as the above...</h6></p></label>
   <input type="text" name="not_email" placeholder="Notification Email" required="">
   <center><button class="btn btn-block btn-lg">Click To Finish Registration</button></center>
        </div>
        </div>
      </div>
     </div>
   </div>
  </div>

  <div class="col m2">
    
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
	<p><a href="#2">Terms and Conditions</a></p>
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
