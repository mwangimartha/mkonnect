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
  <title>CV WRITING</title>

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
        
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >
        <img  style="width:395px; height: 35px; align="left"" src="../images/logo.jpg" >
        
      </a>
    </div>
    <ul class="nav navbar-nav">
     
  <li><a href="#" style="color:white; font-size:1.8em;">MKONNECT ADMIN</a></li>
  <li><a href="#" style="color:white; font-size:1.8em;"><?php echo $_SESSION['email'];  ?></a></li> 
  <div class="pull-right">
    <div class="dropdown" >
  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:8%;">Account Settings
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#"><input type="submit" class=" btn btn-success btn-sm" value="Reset Password"></a></li>
    <li><a href="Auth/logout.php"><input type="submit" class="btn btn-danger btn-md" value="Log Out" style=" padding-right: 5%;" ></a></li> 
  </ul>
</div><!--drop-down-->
</div><!--pull-right-->
      
    </ul>

  </div>
</nav>
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
                    <li class="list-group-item"><a href="../index.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                  
                    <li class="list-group-item"><a href="cvwriting.php" style="color:#000000;" > <i class="glyphicon glyphicon-pencil"></i>CV Writing Views</a></li>
                    <li class="list-group-item"><a href="interviewskills.php" style="color:#000000;"><i class="glyphicon glyphicon-education"></i>Interview Skills Views</a></li>
                    <li class="list-group-item">
                      <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#jobs">Jobs</button> </li>
                  <div id="jobs" class="collapse">
                    <a href="engineering.php" class="list-group-item"><i class="glyphicon glyphicon-ice-lolly-tasted"></i>Engineering</a>
                    <a href="ict.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>ICT</a>
                   <a href="medicine.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Medicine</a>
                </div>
                    
                    <li class="list-group-item"><a href="help" style="color:#000000;"> <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>
                  
                </div><!--listgroup-->
              </div><!--col-md-2-->
             
      <div class="col-md-10">
       <div clas="col-md-10">
<center><p style="font-size:2em;">CV WRITING </p></center>
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="success">
         <th>ID</th>
         <th>Name</th>
         <th>Email </th>
         <th>PhoneNumber</th>
         <th>Date of Registration</th>
         
            

      </thead>
      <?php
      //connect to db
      //connect to db
      include 'db/db_connection.php';

      //select query to view users
      $view_admin_query = " select * from cv_writing";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {
        
        $user_id = $row[0];
        $name = $row[1];
        $email = $row[2];
        $num= $row[3];
        $reg= $row[4];
        $dell = $row[5];
       
      

       ?>
      
       <tr>
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $name; ?></td>
         <td><?php echo $num; ?></td>
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
