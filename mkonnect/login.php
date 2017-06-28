<?php require ("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
       <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
</head>
<body>

<div class="container">
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="data:image/jpeg;base64,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">
      <div class="caption">
      <center><p class="text-danger" style="font-size:2em;">Email or password is incorrect! Please check your details and try again..</p></center>

          <center><a href="mkonnect.php#sales"><button class="btn btn-primary btn-lg" name="back">Try again</button></a></center>
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

//session_start();

// if (isset($_POST['login'])) {

  //declare variable
  $email=$_POST['email'];
  $user_pass = $_POST['password'];
  $user_pass = md5($user_pass);
  $user_id = $_SESSION['user_id'];


  //select query
  $select_log = "SELECT * FROM users WHERE email='$email' AND password='$user_pass' ";

  $query = mysqli_query($con, $select_log);
  $row = mysqli_fetch_array($query);
  $typeuser = $row['user_type'];
  if($query){

        $select_log = "SELECT * FROM users WHERE email='$email'";
        $query = mysqli_query($con, $select_log);
        $user_id = $row['user_id'];
        $_SESSION['email']=$email;
        $_SESSION['id']=$user_id;
        $_SESSION['auth'] = true;

        #check the types of users either employer or employee.(0=false not employer 1=true employer)
        
          echo "<script>window.open('profile.php','_self')</script>";
        
        
  }
   else
    {
        #credentials are false.
        echo"<script> $('#myModal').modal('show');</script>";
       // echo "<script>window.open('mkonnect.php','_self')</script>";
	exit();

    }





 ?>
