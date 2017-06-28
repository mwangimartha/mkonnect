<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
       <link rel="icon" type="image/png" href="img/favicon.ico" sizes="32x32" />
</head>
<body>
<div id="success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/ef/51/fd/ef51fd136b9e359549ceef3673b0dc31.jpg">
      <div class="caption">
      <center><p class="text-warning" style="font-size:2em;"> Saved Successful
      </center>
      
    
     <center><a href="profile.php"><button class="btn btn-warning btn-lg">View Profile</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>
  
</div>


</body>
</html>


<?php
require ("db.php");

        if(isset($_POST['save'])){

         echo $_SESSION['txt_qualification'];

        //select query

         $select_category = " select * from job_category2 WHERE category = '" .$category. "'";

         $run_query = mysqli_query($con, $select_category);

       //query to ensure no double saving

         $rows = mysqli_num_rows($run_query);

    if($rows>0)
     {
  $check_category= "<script>alert(' ".$category." Job Category already exist in our profile, Please try another Job Category!')</script>";

         echo $check_category;
      }

      else{

        $insert_job_category="insert into job_category2 (category) VALUE ('$category')";

    if(mysqli_query($con,$insert_job_category))
     {
       echo"<script>window.open('mkonnect.php','_self')</script>";
   }
   else{

     echo "<script>alert('Check your details and try again')</script>";
    }

     }
 }
