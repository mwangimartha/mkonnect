<!DOCTYPE html>
<html>
<head>
    <title>Skiza Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

   <nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">

      <!-- Brand and toggle get grouped for better mobile display -->
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand">
   <a href="register.php"><img  style="width:395px; height: 35px; align="left"" src="img/logo.jpg" ></a>

        
      </a>
    </div>
    
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <form role="form" class="form-horizontal" action="register.php" method="POST" name="contactform">
            <fieldset>
    
                <legend>MKONNECT ADMIN REGISTER <span class="glyphicon glyphicon-user"></span></legend>

               

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_email" class="control-label">Email</label>
                    </div>
                    <div class="col-md-12">
                       
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus required />
                    <div class="help-block with-errors"></div><!--help-block-->
                        
                    </div>
                </div>
              
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_subject" class="control-label">Password</label>
                    </div>
                    <div class="col-md-12">
                       
                        <input class="form-control" name="txt_pass" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" data-match="#inputPassword" required />
                    <div class="help-block with-errors"></div><!--help-block-->
                       
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_subject" class="control-label">Confirm Password</label>
                    </div>
                    <div class="col-md-12">
                        
                        <input class="form-control" name="confirm_pass" placeholder="confirm Password" type="password"  data-match-error="Whoops, these don't match" value="" id="inputPasswordConfirm"  required />
                    <div class="help-block with-errors"></div><!--help-block-->
                       
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-12">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" style="font-size:1.25em;" >

                    </div>
                </div>
            </fieldset>
            </form>
           
            <center><b>Already registered ?</b> <br></b><a href="login.php" style="font-size:1em;">Login here</a></center>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <!--<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>-->
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>
</html>

<?php

include("db/db_connection.php");//make connection here

    //set validation error flag as false
   # $error = false;
    //check if form is submitted
    
    if (isset($_POST['register']))
    {
        
        $user_email = $_POST['email'];
        $pass = $_POST['txt_pass'];
        $confirm_pass = $_POST['confirm_pass'];
      
$check_email_query="select * from users WHERE email=' $user_email '";
    $run_query=mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
       $welcome="<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
 
        echo $welcome;

    }
//insert the user into the database.

    $insert_user="insert into admin (email,password) VALUES ('$user_email',md5('$pass'))";

    if(mysqli_query($con,$insert_user))
    {
       

          $login = "<script>window.open('login.php','_self')</script>";        
        echo $login;
        
          
    }
    else{
          
          echo "<script>window.location.replace('login.php' ,'_self')</script>";  
      }

     

    }
?>

