
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
   <link rel="icon" type="image/png" href="img/favicon.ico" sizes="32x32" />
</head>
<body>
<div class="container">
  <label>

</div>



</body>
</html>

<?php

require ("db.php");
include('header.php');



if(isset($_POST['accounts'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $email = $_POST['email'];
 $user_pass = $_POST['password'];
 //$user_num = $_POST['txt_number'];
 //$user_job = $_POST['txt_jobs'];

//here query check weather if user already registered so can't register again.

$select_acc="SELECT * FROM users WHERE email='$email' ";

$run_acc=mysqli_query($con,$select_acc);


$rows = mysqli_num_rows($run_acc);

if($run_acc)
{
//$eng_acc= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

//echo $eng_acc;
 echo"<script> $('#reg').modal('show');</script>";
//echo"<script>window.open('mkonnect.php','_self')</script>";

}
else{

// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="INSERT INTO users (email,password) VALUES ('$email',md5('$user_pass'))";

if(mysqli_query($con,$insert_acc))
{
$select_log = "SELECT * from users WHERE email='$email'";
$query = mysqli_query($con, $select_log);
  $row = mysqli_fetch_array($query);
    $user_id = $row['user_id'];
    $_SESSION['email']=$email;
    $_SESSION['id']=$user_id;
    if (isset($_SESSION['category'])) {
      $category_id=$_SESSION['category'];

        $insert_app="INSERT INTO job_applications (user_id,category_id) VALUES ('$user_id','$category_id')";
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
