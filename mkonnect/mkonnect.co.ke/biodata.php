<?php
require ("db.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Credentials Succesful</title>
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
    	<img src="https://trello-attachments.s3.amazonaws.com/57cd66c81620c41c25537e9d/5873245b02367ea3926a590e/a21f54e3c2a9e3fd4cc4c9c3188f1b14/thanks.jpg">
    	<center><p class="text-success" style="font-size:2em;"> Your Credentials have been Successfully
    	</center>
    	<center><p class="text-warning" style="font-size:1.5em;"> Click Profile to View Available Jobs.
    	</center>

     <center><a href="profile.php"><button class="btn btn-success btn-lg">Profile</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>

</div>



<!--div class="container">
  <div id="update_error" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<div class="col-md-12">
    	<div class="thumbnail">
    	<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR86aukb6WHzQ-QmUshY1kPcvnv9GuIkuvFUiaMgt7IJkxHxurRVQ">
    	<div class="caption">
    	<center>
    	<p class="text-danger" style="font-size:2em;">Check your details and try again
    	</p>
    	</center>

     <center><a href="update.php"><button class="btn btn-danger btn-lg">Try Again</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>

</div-->

</body>
</html>




<?php
if(isset($_POST['finish'])){

$cover_letter = $_POST['txt_area'];
$user_id=$_SESSION['id'];
$cv_name=$_POST['cv_name'];



// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into current_applications (letter,cv_name,user_id) VALUES ('$cover_letter','$cv_name','$user_id')";

if(mysqli_query($con,$insert_acc))
{

echo"<script> $('#success').modal('show');</script>";

// echo"<script>window.open('uploadcv.php','_self')</script>";
}
//else{
//echo "<script>alert('Check your details and try again')</script>";
//echo"<script> $('#update_error').modal('show');</script>";
//exit();
//$refresh = "<script>window.open('mkonnect.php','_self')</script>";

//}




}



?>
