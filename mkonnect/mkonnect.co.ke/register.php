
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration failed</title>
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
    	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/13108626_553805548132875_1933189810_n.jpg?ig_cache_key=MTI0ODk1NjE3Mjc3OTgyNTM0OQ%3D%3D.2">
    	<div class="caption">
    	<center><p class="text-success" style="font-size:2em;"> Registration Successful
    	</center>
    	<center><p class="text-warning" style="font-size:1.5em;"> Click Next to Update your profile
    	</center>

     <center><a href="updateprofile.php"><button class="btn btn-success btn-lg">Next</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>

</div>



<div class="container">
  <div id="reg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    	<div class="col-md-12">
    	<div class="thumbnail">
    	<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR86aukb6WHzQ-QmUshY1kPcvnv9GuIkuvFUiaMgt7IJkxHxurRVQ">
    	<div class="caption">
    	<center><p class="text-danger" style="font-size:2em;"> email already exist, Please try another one!'</p></center>

     <center><a href="mkonnect.php"><button class="btn btn-primary btn-lg">Try Again</button></a></center>
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
include('header.php');



if(isset($_POST['accounts'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $user_email = $_POST['email'];
 $user_pass = $_POST['password'];
 //$user_num = $_POST['txt_number'];
 //$user_job = $_POST['txt_jobs'];

//here query check weather if user already registered so can't register again.

$select_acc="select * from users WHERE email='".$user_email."'";

$run_acc=mysqli_query($con,$select_acc);


$rows = mysqli_num_rows($run_acc);

if($rows>0)
{
//$eng_acc= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

//echo $eng_acc;
 echo"<script> $('#reg').modal('show');</script>";
//echo"<script>window.open('mkonnect.php','_self')</script>";

}
else{

// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into users (email,password) VALUES ('$user_email',md5('$user_pass'))";

if(mysqli_query($con,$insert_acc))
{
$select_log = "select * from users WHERE email='$user_email'";
$query = mysqli_query($con, $select_log);
  $row = mysqli_fetch_array($query);
    $user_id = $row['user_id'];
    $_SESSION['email']=$user_email;
    $_SESSION['id']=$user_id;
    if (isset($_SESSION['category'])) {
      $category_id=$_SESSION['category'];

        $insert_app="insert into job_applications (user_id,category_id) VALUES ('$user_id','$category_id')";
        mysqli_query($con,$insert_app);    }
  $_SESSION['auth'] = true;

echo"<script> $('#success').modal('show');</script>";
//echo "<script>alert('Registration Successful')</script>";

//echo"<script>window.open('jobs.php','_self')</script>";



}
else{
echo "<script>alert('Check your details and try again')</script>";
$refresh = "<script>window.open('mkonnect.php','_self')</script>";
 echo $refresh;
 exit();
}

}


}



?>
