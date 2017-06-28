<?php

//store information of all pages in variables

session_start(); 

if (!$_SESSION['email']) {
  
  header("location: ../Auth/login.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Creatives</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../css/styles.css" rel="stylesheet">
     <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    
</head>
<body>
<header>
    
        <div class="header">
          <div class="container">
          <div class="col-md-5">
            <!--logo-->
            <div class="logo">
              <a class="navbar-brand">
                <a href="../index.php">
                  <img src="../images/logo.jpg">
                </a>
              </a>
            </div>
          </div><!--col-md-5-->

          <div class="col-md-3">
            <center><p style="color: white; font-size: 1.3em; margin-top: 4%;"> MKONNECT ADMIN PORTAL</p></center> 
            
          </div><!--col-md-3-->

          <div class="col-md-2">
            <center><p style="color: white; font-size: 1.5em; margin-top:4%;"><?php echo $_SESSION['email'];  ?></p></center>
          </div><!--col-md--2-->

          <div class="col-md-2">
            <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                      <div class="signout">
                        <a href="../Auth/logout.php"><input type="submit" class="btn btn-info" value="LogOut" style="margin-top:8%; "></a>
                      
                   
                      </ul><!--nav-->

                    </nav>
                </div>

           </div><!--col-md-2-->

          </div><!--container-->
        </div><!--header-->
      
</header>
<section>
  <div class="breadcrumb">
    <div class="col-md-12">
      <ul class="breadcrumb">
      <li>
  <button class="btn btn-danger" onclick="skiza()">Print this</button>
  </li>
  <li>
  <a href="export.php"><button class="btn btn-danger">EXPORT</button></a>
  </li>
  </ul>
</div><!--breadcrumb-->
  </div><!--col-md--12-->
</section>
<section>
        <div class="page-content">
            <div class="row">
              <div class="col-md-2">
                <div class="list group" style="width:90%; padding:3%; font-size:1.7em; ">
                   <ul class="list-group" >
                    <li class="list-group-item"><a href="index.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                  
                    <li class="list-group-item"><a href="views/cvwriting.php" style="color:#000000;" > <i class="glyphicon glyphicon-pencil"></i>CV Writing Views</a></li>
                    <li class="list-group-item"><a href="views/interviewskills.php" style="color:#000000;"><i class="glyphicon glyphicon-education"></i>Interview Skills Views</a></li>
                    <li class="list-group-item">
                      <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#jobs">Jobs</button> </li>
                  <div id="jobs" class="collapse">
                    <a href="views/marketing.php" class="list-group-item"><i class="glyphicon glyphicon-ice-lolly-tasted"></i>Sales & Marketing</a>
                    <a href="views/ict.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>ICT</a>
                    <a href="views/accounts.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Accounting</a>
                   <a href="views/management.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Top Management</a>
                   <a href="views/creatives.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Creatives</a>
                   <a href="views/customer_service.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Customer Service</a>
                   <a href="views/education.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Education</a>
                   <a href="views/farming.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>farming</a>
                   <a href="views/government.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Government</a>
                   <a href="views/health.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Healthcare</a>
                   <a href="views/human_resource.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Human Resource</a>
                   <a href="views/insurance.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Insurance</a>
                   <a href="views/legal.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Legal</a>
                   <a href="views/manufacturing.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Manufacturing</a>
                   <a href="views/minning.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Minning & Natural Resource</a>
                   <a href="views/NGO.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>NGO</a>
                   <a href="views/administration.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Administration&Office support</a>
                   <a href="views/project_management.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Project Management</a>
                   <a href="views/research.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Research& Quality Assurance</a>
                   <a href="views/retail.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Retail</a>
                   <a href="views/business_development.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Business Development</a>
                   <a href="views/security.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Security</a>
                   <a href="views/strategy_consulting.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Strategy & Consulting</a>
                   <a href="views/tourism.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Tourism & Travel</a>
                   <a href="views/trade.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Trade & services</a>
                   <a href="views/procurement.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Transport,Logistics,Procurement</a>
                   <a href="views/real_estate.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Real Estate</a>
                   <a href="views/hospitality.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Hospitality</a>
                   <a href="views/others.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Others</a>
                </div>
                    <li class="list-group-item"> <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#traffic">Traffic  <span class="glyphicon glyphicon-flash"></span></button> </li>
                  </li>
                    <div id="traffic" class="collapse">
                      <li class="list-group-item"><a href="views/traffic.html" style="color:#000000;" >Facebook</a>
                      <li class="list-group-item"><a href="traffic.html" style="color:#000000;" >Google SEO</a>
                    </div>
                    <li class="list-group-item"> <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#activity">Activity  <span class="glyphicon glyphicon-star"></span></button> </li>
                  </li>
                    <div id="activity" class="collapse">
                      <li class="list-group-item"><a href="views/active.php" style="color:#000000;" >Active Job Seeker <span class="glyphicon glyphicon-eye-open"></span></a>
                      <li class="list-group-item"><a href="views/dormant.php" style="color:#000000;" >Dormant Job seeker &nbsp;<span class="glyphicon glyphicon-eye-close"></span></a>
                    </div>
                    <li class="list-group-item"><a href="help" style="color:#000000;">
                     <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>
                  
                </div><!--listgroup-->

              </div><!--col-md-2-->
             
      <div class="col-md-10">
       <div clas="col-md-10">
<center><p style="font-size:2em;">Creatives Job Seeker</p></center>
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="success">
         <th>ID</th>
         <th>Name</th>
         <th>Email </th>
         <th>Job Category </th>
         <th>Date of Registration</th>
         
            

      </thead>
      <?php
      //connect to db
      //connect to db
      include 'db/db_connection.php';

      //select query to view users
      $view_admin_query = " select * from users";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {
        
        $user_id = $row[0];
        $name = $row[1];
        $email = $row[2];
        $reg= $row[3];
        $reg= $row[4];
        $dell = $row[5];
       
      

       ?>
      
       <tr>
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $name; ?></td>
         <td><?php echo $reg; ?></td> 
        <td><a href="deleteartiste.php?del=<?php echo $id ?>"><button class="btn btn-warning">Delete Artiste</button></a></td>
       </tr>
       <?php } ?>
    </table>
  </div>
</div>
</div><!--col-md-12 -->
            </div><!--row-->
        </div><!--page-content-->
        
    </section>
<section>






<section>
<script>
function skiza() {
    window.print();
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
