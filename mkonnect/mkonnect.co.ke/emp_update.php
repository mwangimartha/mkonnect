<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Job</title>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="https://trello-attachments.s3.amazonaws.com/57cd66c81620c41c25537e9d/5873245b02367ea3926a590e/a21f54e3c2a9e3fd4cc4c9c3188f1b14/thanks.jpg">
      <div class="caption">
      <center><p class="text-warning" style="font-size:2em;"> Job Has Been Posted Succesfully
      </center>
		

     <center><a href="postjob.php#posts"><button class="btn btn-warning btn-lg">View Report</button></a></center>
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
if(isset($_POST['profile'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $job_title = $_POST['txt_job_title'];
 $company_name=$_POST['txt_companyname'];
 $job_description=$_POST['text_area'];
 $job_category=$_POST['txt_nationality'];
 $experience=$_POST['txt_experience'];
 $employer_id =$_SESSION['id'];
 $website = $_POST['txt_website'];





// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into employer_jobs (job_title,company_name,job_description,job_category,job_experience,company_website,employer_id) VALUES ('$job_title','$company_name','$job_description','$job_category','$experience','$website','$employer_id')";

if(mysqli_query($con,$insert_acc))
{
  //echo "<script>alert('Job Post successful')</script>";
echo"<script> $('#success').modal('show');</script>";
//  echo "<script>window.open('postjob.php','_self')</script>";

}




}



?>
