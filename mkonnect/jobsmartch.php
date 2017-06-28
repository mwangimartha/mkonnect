<?php
require 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Jobs Found</title>
	<!-- Bootstrap -->
    

	<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
  background-image: url("https://americanlibrariesmagazine.org/wp-content/uploads/2012/12/background_jobs4web.jpg");

}

#about .well{
  height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
}
#job_types{
  background-image: url(""); height: auto;
  width: 100%; padding: 40px 0; overflow: hidden;
}

.jobbs {
  background-image: url("https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTwpFj66a4NwG0kr9hDqkNBJFbTF3ISpIPKe-Mvr8w4KEy3AYqV");
  width: 100%;
  height: auto;
  width: auto;
  padding: 40px 0;
  overflow: hidden;
}
.thumbnail{
 
  width: 100%;
  height: auto;
  width: auto;
  padding: 40px 0;
  overflow: hidden;
}
 .wow:first-child {
      visibility: hidden;
    }
}
</style>
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
<!--have an account login if not register-->

<body data-spy="scroll" data-target="#uxt" data-offset="70" style="background-color: silver;">
<script type="text/javascript" src="js/jquerymkon.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>

  
    <!--img src="img/logo.jpg" style="float: left;"-->
    <nav>
    <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="img/icons/imageedit_4_7060829937.png" style="width: 202px;"></a>
    <a href="#" data-activates = "mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down" style="text-decoration: none;">
      <li><strong><a href="mkonnectn1.php">Home &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
      <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      <li><strong><a href="job_post.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      
      </ul>
      <ul class="side-nav" id="mobile-demo" style="text-decoration: none;">
        <li><strong><a href="mkonnectn1.php">Home &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="job_post.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>  
      </ul>
    </div>
    </nav>
    <div class="row">
<div class="col m12" id="card-panel teal lighten-2" style="background-image:url();">
  <!--div class="card-panel teal lighten-2" style="background-image:url('img/soc_2.jpg')"-->
  <form action="jobsmartch.php"  method="Post">
    <h3 style="font-size: 50px;color:rgb(8,10,260);">Find New Jobs Here...</h3>
  <div style="padding-left: 170px;background-color:orange;border-radius: 25px;">
    <label style="font-size: 30px;">Eassy Search:</label>
    <label style="font-size: 30px;color:color:rgb(8,10,260);">Job Category:</label>
    <input type="text" name="category" id="category" placeholder="category" style="width:150px;" required="">
    <label style="font-size: 30px;color:color:rgb(8,10,260);">Location:</label>
    <input type="text" name="location" id="location" placeholder="location" style="width:150px;" required="">
    <button class="btn btn-info" type="Submit"><span class="glyphicon glyphicon-search"></span>Search jobs</button>
  </div>
  </form>
  </div>
</div>
<?php


$category = $_POST['category'];
$location = $_POST['location'];
$run_qry = "SELECT * FROM employer_jobs WHERE job_category= '$category'  AND location ='$location'";
$getjobs = mysqli_query($con , $run_qry);

$numrows = mysqli_num_rows($getjobs);
if ($category = $location == "") {
  echo "fields cannot be empty.Check and Try Again.";
  exit();
}
?>
<div class="row">
<div class="col m4" style="height: 5px;">
  <div class="card-panel" style="box-shadow: 10px 10px 5px #888;">
  <h4><?php 
  if ($numrows == 0) {
  echo "Sorry There No Matching Job(s) Found!!!!Keep on Trying.";
}else {

  echo "Job(s) Found: $numrows ";

}
   ?></h4>
  </div>
  </div>
  </div>
  <?php
while ($row = mysqli_fetch_array($getjobs)) {
  # for collecting multiple data of the same type

$job_title =$row[0];
$co_name = $row[1];
$desc = $row[2];
$job_category = $row[3];
$job_location = $row[10];
$Dateposted = $row[9];
$amount = $row[11];
?>
  <hr style="width: 100%;">
  <div class="row">
  <div class="col m8" style="float: right;">
  <div class="card-panel" style="box-shadow: 10px 10px 5px #888;width:">
  <h4><strong>Job Title:<?php echo $job_title; ?></h4></strong>
  <hr style="border-top:3px double black;">
  <h3>Date Posted[Date/Time]:<?php echo $Dateposted; ?>
  <h3>Category:<?php echo $job_category; ?></h3>
  <h3>Description :<?php echo $desc; ?></h3>
  <h3>Posted by :<?php echo $co_name; ?></h3>  
  <h3><img src="img/icons/address.jpg" style="width: 30px;height: 30px;">:<?php echo $location; ?> &nbsp 
  &nbsp &nbsp<img src="img/icons/payment.jpg" style="width: 30px;height: 30px;">Payable: <?php echo $amount; ?>&nbsp &nbsp<a href="login3.php"><button class="btn btn btn-lg">Apply Now</button></a></h3>
  </div>
  </div> 

</div>
<?php } ?>

  
<!--beginning of footer.....-->
<footer class="page-footer" style="background-color: rgb(8,8,8);margin-top: 250px;">
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
    require_once 'footertitle.php' ?>Mkonnect&reg.<br>All Rights Reserved</p>
</div>
</div>
</footer>
</body>
</html>