<?php
 require ("db.php");
 ?>
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
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="http://www.clipartkid.com/images/85/smiley-face-thumbs-up-clipart-panda-free-clipart-images-XsvGRj-clipart.png">
      <div class="caption">
      <center><p class="text-success" style="font-size:2em;"> Registration Successful
      </center>
      <center><p class="text-warning" style="font-size:1.5em;"> Click Next To Post Jobs.
      </center>

     <center><a href="postjob.php"><button class="btn btn-success btn-lg">Next</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>

</div>

<div id="error" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="http://previews.123rf.com/images/krisdog/krisdog1510/krisdog151000166/47534099-A-thinking-emoji-emoticon-smiley-face-character-looking-interested-with-hand-on-chin-Stock-Vector.jpg">
      <div class="caption">
      <center><p class="text-warning" style="font-size:2em;"> Email already exist
      </center>
      <center><p class="text-warning" style="font-size:2em;"> Login if you already have an account, if you've forgotten password, reset it <a href="mkonnect.php#postjob">here</a>
      </center>


     <center><a href="postjob.php#posts"><button class="btn btn-warning btn-lg">Try Again</button></a></center>
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
      if(isset($_POST['job_post_register'])){

      //declare variable
       //$user_name = $_POST['txt_name'];
       $user_email = $_POST['job_post_email'];
       $user_pass = $_POST['job_post_password'];
       //$user_num = $_POST['txt_number'];
       //$user_job = $_POST['txt_jobs'];

      //here query check weather if user already registered so can't register again.

      $_SESSION['email']=$user_email;

      $select_acc="select * from employer WHERE email='".$user_email."'";

      $run_acc=mysqli_query($con,$select_acc);


      $rows = mysqli_num_rows($run_acc);

      if($rows>0)
      {
     // $eng_acc= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";
        echo"<script> $('#error').modal('show');</script>";

      echo $eng_acc;
      echo"<script>window.open('mkonnect.php','_self')</script>";

      }
      else{

      // $_POST['marketing']=null;

      //insert the user into the database.

      $insert_acc="insert into employer (email,password) VALUES ('$user_email',md5('$user_pass'))";

      if(mysqli_query($con,$insert_acc))

      {
      //echo "<script>alert('Registration Successful')</script>";
      $_SESSION['auth'] = true;
      echo"<script> $('#success').modal('show');</script>";
      }
      }


      }

 ?>
