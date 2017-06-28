<?php 
include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mkonnect New</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    <meta name="description" content="WOWSlider">
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="HandheldFriendly" content="true">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="canonical" href="https://www.mkonnect.co.ke" >
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <!--w3 css-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css"> 
    <link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/mkonnect.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="js/jquerymkon.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	
		<!--img src="img/logo.jpg" style="float: left;"-->
    <div class="">
    <nav class="test">
		<div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="img/icons/imageedit_4_7060829937.png" style="width: 202px;"></a>
    <a href="#" data-activates = "mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down" style="text-decoration: none;">
 			<li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
 			<li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
 			<li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
 			<li><strong><a href="#post_jobs">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>
 			
 			</ul>
      <ul class="side-nav" id="mobile-demo">
        <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="login3.php">Login &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="#post_jobs">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>  
      </ul>
 		</div>
    </nav>
    </div>
  
  <div class="row" style="padding-top: 0%;background-image: url();">
  <div class="col m12" id="card-panel teal lighten-2">
	<!--div class="card-panel teal lighten-2" style="background-image:url('img/soc_2.jpg')"-->
  <form action="jobsmartch.php"  method="POST" name="search">
		<h3 style="font-size: 50px;color:rgb(8,10,260);" class="blink-btn"><?php require_once 'mkon_jobs.php' ; ?>...</h3>
    
	<div style="padding-left: 170px;background-color:orange;border-radius: 25px; " class="card-panel">
    <label style="font-size: 20px;">Eassy Search:</label>
    <div class="row" style="box-sizing: border-box;border-color: red;">
    <div id="category" class="col m5" style="margin-left: -100px;">
		<label style="font-size: 30px;color:color:rgb(8,10,260);">Job Category:</label>
		 <select class="form-control" name="category" id="category" style="width:290px;" required="";>
                  <?php
                  $db = "job_category";

                  $select_db=mysqli_select_db($con,$db);

                  $query = "select * from job_category";
                  $query1 = mysqli_query($con,$query);

                  while ($row = mysqli_fetch_assoc($query1)) {
                    echo "<option value='".$row['id']."'>".$row['category']."</option>";
                  }
                   ?>
    </select>
    </div>
    <div id="location" class="col m5" style="margin-left: -170px;">
		<label style="font-size: 30px;color:color:rgb(8,10,260);">Location:</label>
		<select class="form-control" name="location" id="location" style="width: 290px;" required="">
        <option value="Nairobi">Nairobi</option>
        <option value="Kisumu">Kisumu</option>
        <option value="Thika">Thika</option>
        <option value="Mombasa">Mombasa</option>
        <option value="Nakuru">Nakuru</option>
        <option value="Eldoret">Eldoret</option>
        <option value="Naivasha">Naivasha</option>
        <option value="Garissa">Garissa</option>
        <option value="Rest Of Kenya">Rest of Kenya</option>  
        <option value="Rest Of World">Rest of World</option>
    </select>
    </div>
    <div class="col m2" style="margin-top: 40px;margin-left: -150px;">
		<button class="btn btn-info" type="Submit" style="width: 350px;"><span class="glyphicon glyphicon-search"></span>Search jobs</button>
    </div>
	</div>
  </div>
  </form>
	</div>
</div>
<div class="row">
<div class="col m12" style="background-color:; ; height: 300px;">

<center><h1>Discover Great Candidate Today!</h1>
<h2>Try Mkonnect today,the best tool to get the matching candidate for your job...</h2>
<form  action="login3.php" method="post">
<button class="btn btn-large" type="Submit">Post Job Now</button>
</form><!--close container--></center>
</div><!--close col m12-->

</div><!--close row-->
<!--section class="job_types"-->
<div class="container-fluid" style="margin-top: 25px; box-sizing: border-box;border-top: dotted; border-bottom: dotted;background-color: gainsboro;">
  <center><h5>List of Jobs By Category</h5></center>

    <div class="row">
    <div class="col m6" style="margin-top: 15px;padding-left: 180px;">
    <!--div class="wow fadeInDown" data-wow-delay="1s" style="float:left;font-size: 15px;"-->

              <a href="#9" style="color:#fff;"><h3>IT & Telecoms</h3></a>
              <hr>
             <a href="#jobs" style="color:#fff;"> <h3>Accounting</h3></a>
             <hr>
             <a href="#jobs" style="color:#fff;"> <h3>Top Management</h3></a>
             <hr>
              <a href="#jobs" style="color:#fff;"><h3>Creatives</h3></a>
              <hr>
              <a href="#3" style="color:#fff;"><h3>Customer Service</h3></a>
              <hr>
             <a href="#3" style="color:#fff;"> <h3>Education</h3></a>
             <hr>
             <a href="#6" style="color:#fff;"> <h3>Farming&Agriculture</h3></a>
             <hr>
              <a href="#6" style="color:#fff;"><h3>Government</h3></a>
              <hr>
             <a href="#6" style="color:#fff;"> <h3>Healthcare & Pharmaceuticals</h3></a>
             <hr>
             <a href="#9" style="color:#fff;"> <h3>Human Resources & Recruitment</h3></a>
             <hr>
             <a href="#9" style="color:#fff;"> <h3>Insurance</h3></a>
             <hr>
             <a href="#12" style="color:#fff;"> <h3>Legal</h3></a>
             <hr>
             <a href="#12" style="color:#fff;"> <h3>Manufacturing & Production</h3></a>
             <hr>
            <a href="#15" style="color:#fff;">  <h3>Minning & Natural Resources</h3></a>
            <hr>
            <a href="" style="color:#fff;"><h3>Internship $ Voluntering</h3></a>
            <hr>

        </div><!--wow-->
      

 <div class="col m6">
<!--div class="wow fadeInDown" data-wow-delay="1s" style="float:right;font-size: 15px;"-->
              <a href="#12" style="color:#fff;"><h3>Marketing, Communications & PR</h3></a>
              <hr>
              <a href="#15" style="color:#fff;"><h3>NGO, Communication</h3></a>
              <hr>
              <a href="#15" style="color:#fff;"><h3>Administration & office Support</h3></a>
              <hr>
              <a href="#16" style="color:#fff;"> <h3>Project/ Project Management</h3></a>
              <hr>
              <a href="#16" style="color:#fff;"><h3>Research, Quality control/ Quality Assurance</h3></a>
              <hr>
              <a href="#16" style="color:#fff;"><h3>Retail</h3></a>
              <hr>
              <a href="#19" style="color:#fff;"><h3>Sales/Business Development</h3></a>
              <hr>
              <a href="#19" style="color:#fff;"><h3>Security</h3></a>
              <hr>
              <a href="#19" style="color:#fff;"><h3>Strategy & Consulting</h3></a>
              <hr>
              <a href="#22" style="color:#fff;"><h3>Tourism & Travel</h3></a>
              <hr>
              <a href="#22" style="color:#fff;"><h3>Trade & Services</h3></a>
              <hr>
              <a href="#22" style="color:#fff;"><h3>Transport,Logistics,Procurement</h3></a>
              <hr>
              <a href="#25" style="color:#fff;"><h3>Real Estate</h3></a>
              <hr>
              <a href="#25" style="color:#fff;"><h3>Hospitality</h3></a>
              <hr>
              <a href="#25" style="color:#fff;"><h3>Others</h3></a>
              <hr>
      </div><!--data-wow-->
  </div><!--col-md-6--> 
</div><!--container-->
<!--/section-->	

<!--section class="middle"-->
<div class="job_posted">
<ul class="collapsible" data-collapsible="accordion">
<li>
<div class="collapsible-header"><center><h3>click here to view newly posted jobs</h3></center></div>
<div class="collapsible-body">
  <div class="table-responsive">

    <table class="table  table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="gridtable">
         <th>Job Title</th>
         <th>Employer</th>
         <th>Job Description </th>
         <th>Job Category </th>
         <th>Years of Experience </th>
         <th>Available Positions </th>
         <th>Date/Time posted</th>
         </tr>
      </thead>
      <?php
      //connect to db
      
      include 'db/db_connection.php';
      $conid ="SELECT * FROM employer_jobs";
      $getid =mysqli_query($con ,$conid);
      $numjobs = mysqli_num_rows($getid); 
      $rows =mysqli_fetch_array($getid);
      $employer_id = $_SESSION['id'];

      //select query to view users
      $view_admin_query = "select * from employer_jobs WHERE employer_id='$employer_id'";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {

        $user_id = $row[0];
        $job_title = $row[1];
        $company_name = $row[2];
        $job_category= $row[3];
        $experience= $row[4];
        $open_positions=$row[7];
        //$post_date = $row[5];
        $post_date = $row['Post_Date'];
       ?>

       <tr class="info" style="text-align: center;font-size: 11px; background-color:rgb(25,250,200);">
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $job_title; ?></td>
         <td><?php echo $company_name; ?></td>
         <td><?php echo $job_category; ?></td>
         <td><?php echo $experience; ?></td>
         <td><?php echo $open_positions; ?></td>
         <td><?php echo $post_date; ?><a href="login3.php"><button style="margin-right: -150px;background-color:rgb(10,50,48);color: #20ff30"><p class="blink-btn"><strong>Apply Now</strong></p></button></a></td>
      </tr>
       <?php } ?>
    </table>
  </div>
  </div>
  </li>
</ul>
</div>
<!--/section-->
<!--center adverts-->
<!--post jobs-->
<div id="post_jobs">
<div class="jobbs">
  <div class="row">

  <div class="col-md-12">


        <div class="thumbnail wow slideInRight" data-wow-delay="1s" style="padding-right:0%; width:auto; margin-left: 0%; " >
        <!--div class="panel"-->

          <fieldset style="padding:0%;">

          <h1 style="text-align: center;"><i class="fa fa-registered" aria-hidden="true" fa-5x aria-hidden="true"></i></h1>
           <center><h3 class="text-warning">POST JOBS</h3></center>
            <hr>
            <form method="POST" action="emp_login.php">

              <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Enter Email</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

             <input class = "form-control" name="email" placeholder="Your Email" id="email" type="email" autofocus="" required="">

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" style="margin-left:15%">
                <div class="form-group">
                <label><h3>Enter Password</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

              <input class="form-control" name="password" placeholder="Your Password" type="password" id="password1"  required="">

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" >
                <div class="form-group">


              <center><button name="emp_login" class="btn btn-success btn-lg">Login</button></center>

              </form>

              <p class="text-danger" style="text-align:center; margin-top:2%;">
              <a data-toggle="collapse" href="#forgotten_jobs" aria-expanded="false" aria-controls="collapseExample"> Forgotten Password? </a></p>

              <div id="forgotten_jobs" class="collapse">
              <form method="POST" action="remind.php">

                <div class="form-group">
                 <div class="col-md-8">

                   <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                    <div class="col-md-12">
                <div class="form-group">
                   <input class="btn btn-lg btn-primary btn-lg " type="submit" value="Submit Email" name="accounts"   style="font-size:1.25em;">

                </div>
              </div>
              </form>

              </div><!--forgotten_jobs-->

          <p class="text-warning" style="text-align: center;"> If you don't have an account click Below to register <i class="fa fa-hand-o-down" aria-hidden="true"></i></p>
              <center><button class="btn btn-primary btn-lg" a data-toggle="collapse" href="#post_jobs_reg" aria-expanded="false" aria-controls="collapseExample"> Click to Register </button></center>

                </div><!--from-group-->
              </div><!--col-md-10-->


            <div id="post_jobs_reg" class="collapse">

              <div class="breadcrumb">


            <form method="POST" action="emp_reg.php" data-toggle="validator" >


                <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Enter Email</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

             <input class="form-control" name="job_post_email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Enter Password</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%">
                <div class="form-group">

              <input class="form-control" name="job_post_password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
              <div class="help-block">Minimum of 6 characters</div>

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Confirm Password</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

              <input class="form-control" type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
               <div class="help-block with-errors"></div>

                </div><!--from-group-->
              </div><!--col-md-10-->
              <div class="col-md-8" >
                <div class="form-group" style="margin-left:20%">
              <center><button class="btn btn-info btn-lg" name="job_post_register"> Register To Post Job</button>
              </div></center>

            </form>

            </div><!--breadcrum-->
            </div><!--post_job_reg-->

          </fieldset>

         <!-- </div>panel-->
        </div><!--panel-->
      </div><!--col-md-8-->
</div><!--jobbs-->
</div><!--post-Jobs-->


<!--end of postjobs-->
<!--   -->
<div class="row" style="border-radius: 10px;background-color:grey;border-bottom: dotted;">
  <!--p><center><h2>This is where the details before footer will appear</h2></center></p-->
  <div class="col m3" style="padding-top: 10px;">
  <img src="img/Notified.jpg" class="img-thumbnail" style="width: 75px;height: 75px;">
  <h5>Get Notified</h5>
  <p style="font-size: 15px;">Sign up for job alerts and get the newest job <br>postings you want delivered right to your email.Submit Your Email Here and Get free Job Alerts.</p>
  </div>
  <div class="col m3" style="padding-top: 10px;">
  <img src="img/found.jpg" class="img-thumbnail" style="width: 75px;height: 75px;">
  <h5 style="font-family: ">Get Found</h5>
  <p style="font-size: 15px;">Employers and recruiters use Mkonnect to find candidates like you.<br> Make your resume searchable and allow recruiters to contact you.<br> Your job search just got easier!</p>
  </div>
  <div class="col m3" style="padding-top: 10px;">
  <img src="img/employed.jpg" class="img-thumbnail" style="width: 75px;height: 75px;">
    <h5>Get Hired</h5>
    <p style="font-size: 15px;">Mkonnect connects the best tech talent with jobs around the world.<br>Whether you're a developer, engineer, or QA tester, Accountant , Mkonnect has what you need to keep your career on track.</p>
  </div>
  <div class="col md3" style="box-sizing: border-box;border: dotted;width: 300px; box-shadow: 10px 10px 5px #888;">
    <h5>Get Our Free Job Alerts.</h5>
    <h5>Enter Email:</h5>
    <input type="email" name="email" placeholder="email">
    <h5>Enter Password:</h5>
    <input type="Password" name="Password" placeholder="Password">
    <a href="mailto:dnzola@uxt.co.ke"><button class="btn btn-large">Click To Submit</button></a>
  </div>
</div>
</div>
<div class="row">
<h2><center>List Of Our Loyal Partners</center></h2>
</div>
<div class="row" style="border-bottom:">
<div class="col l3">
    <img src="img/marks.jpg" style="width: 70%;">
</div>
<div class="col l3">
    <img src="img/safcom.jpg" style="width:70%">
</div>
<div class="col l3">
    <img src="img/ramsa.png" style="width:70%">
</div>
<div class="col l3">
    <img src="img/logo.jpg" style="width:70%">
</div>
    <!--button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button-->
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
  $(document).ready(function(){
  $(".button-collapse").sideNav();
        
});
</script>
<!--class row-->
<div class="row" style="background-color: lightgrey;">
    <div class="col m4" style="background-color:;"><h3>What Is Mkonnect ?</h3>
    <p>
      Mkonnect is an Online Job Application system that<br> Profile Matches Employers and <br>
      Job seekers according to the employer's <br>requirements and the seeker's qualifications.
    </p>
    </div> 
  <div class="col m4" style="background-color:;">
  <h3>Is Mkonnect Safe & Secure To Use?</h3>
  <p>
    At Mkonnect We establish secure communication <br>
    between jobsekeers and Employers.All Our Transactions Are Encrypted.
  </p>
    
  </div>
  <div class="col m4" style="background-color:;">
  <h3>Why Choose Mkonect?</h3>
  <p>
    At Mkonnect We establish secure communication <br>
    between jobsekeers and Employers.All Our Transactions Are Encrypted.
  </p>
  </div>
</div>

<footer class="page-footer" style="background-color: rgb(8,8,8);">
<div class="row">
<div class="col m3">
  <p style="font-size: 20px;">Our Mission & Vission</p>
  <p>At mkonnect we link the employer and the job seeker.
  Profile matching employer and job seekers according to
  employers requirements and the job seekers qualification.</p>
</div><!--end of col md4-->
<div class="col m2">
  <p style="font-size: 20px;">find Us on:</p>
  <p><a href="https://www.facebook.com/Mkonnect-358202137915558/"><img src="img/icons/soc_fb.png" style="width: 15px;height: 15px;">&nbsp &nbsp facebook</a></p>
  <p><img src="img/icons/soc_gplus.png" style="width: 15px;height: 15px;">&nbsp &nbsp google +</p>
  <p><img src="img/icons/soc_tw.png" style="width: 15px;height: 15px;">&nbsp &nbsp twitter</p>
  <p><img src="img/icons/soc_in.jpg" style="width: 15px;height: 15px;">&nbsp &nbsp linkedIn</p>
</div>
<div class="col m3">
  <p style="font-size: 20px;">Important links</p>
  <p><a href="terms_conditions.php">Terms and Conditions</a></p>
  <p><a href="privacy_policy.php">Privacy Policy</a></p>
  <p><a href="#2">FAQs.</a></p>
</div>
<div class= "col m4">
  <p style="font-size: 20px;">Contact Info:</p>
  <p><img src="img/icons/address.jpg" style="width:20px;height:20px;">&nbsp Bemuda plaza,Ngong Rd,Block A | 4th Floor,Left Wing | P.O.Box 12971-00100,Nairobi.</p>
  <p><img src="img/icons/cont.jpg" style="width: 20px;height: 20px;">&nbsp Phone:+254 713 958 410 | +254 020 243 9488</p>
  <p><img src="img/icons/email.jpg" style="width: 20px;height: 20px;">&nbsp info@mkonnect.co.ke</p>
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
<!--close div container-->
</body>
</html>