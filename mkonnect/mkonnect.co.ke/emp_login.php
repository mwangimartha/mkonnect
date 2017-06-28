<?php
require ("db.php");

if (isset($_POST['emp_login'])) {

  //declare variable

  $email=$_POST['email'];
  $user_pass = $_POST['password'];
  $user_pass = md5($user_pass);


  //select query
  $select_log = "select * from employer WHERE email='$email' AND password='$user_pass'";

  $query = mysqli_query($con, $select_log);

  if(mysqli_num_rows($query)){

    $select_log = "select * from employer WHERE email='$email'";
    $query = mysqli_query($con, $select_log);
      $row = mysqli_fetch_array($query);
        $user_id = $row['employer_id'];
        $_SESSION['email']=$email;
        $_SESSION['id']=$user_id;
        $_SESSION['auth'] = true;
        echo "<script>window.open('postjob.php','_self')</script>";
  }
   else
    {
        echo "<script>alert('Email or password is incorrect! Please check your details and try again.')</script>";
        echo "<script>window.open('mkonnect.php#postjob','_self')</script>";
	exit();

    }




}
 ?>
