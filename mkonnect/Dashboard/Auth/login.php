<?php
session_start();//session starts here

?>

<!DOCTYPE html>
<html>
<head>

	<title>MKONNECT ADMIN </title>
	<!--responsive-->
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	 <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

   

</head>
<body>

<header>
	
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
      <a class="navbar-brand" >
      	<img  style="width:395px; height: 35px; align="left"" src="img/logo.jpg" >
      	
      </a>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="navbarCollapse">
    
      <ul class="nav navbar-nav navbar-right" style="font-size:1.2em;">
        
         
        <li class="active"><a href="register.php">Register</a></li>
       
      </ul>
       
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
			<form role="form" class="form-horizontal" action="login.php" method="POST" name="contactform">

				<fieldset>
					<legend> <center> <span class="glyphicon glyphicon-user"></span> MKONNECT ADMIN  <span class="glyphicon glyphicon-user"></span></center> </legend>

			
						<div class="form-group">

						<div class="col-md-12">
							
							<label for="email" class="control-label">Email</label>

						</div><!--col-md-12-->

						<div class="col-md-12">
							
				<input class="form-control" name="email" placeholder="Enter Email" type="email" autofocus required />

                     <div class="help-block with-errors"></div><!--help-block-->


						</div><!--col-md-12-->

						</div><!--form-group-->

						<div class="form-group">

						<div class="col-md-12">
							
							<label for="password" class="control-label">Password</label>

						</div><!--col-md-2-->

						<div class="col-md-12">
							
							
					<div class="help-block with-errors"></div>
				<input class="form-control" name="password" placeholder="Enter Password" type="password" data-minlength="6" id="inputPassword" value="" required  />

              <div class="help-block with-errors">Minimum of 6 Characters</div><!--help-block-->

						</div><!--col-md-12-->

						</div><!--form-group-->

						<div class="form-group">
                  <div class="col-md-12">
                     <div class="checkbox">
               <label><input type="checkbox" name="re"> Remember me</label>
                    </div><!--checkbox-->
                  </div><!--col-md-12-->
                </div><!-- form-group-->
					<div class="form-group">
							<div class="col-md-12">
								<div class="panel">
									<center><p class="text-danger">Forgetten Password? Click <a href="reset.php" target="blank">here</a></p></center>
								</div><!--panel-->
							</div><!--col-md-12-->
						</div><!--form-group-->	

						<div class="form-group"

							<div class="col-md-12">

							
							<center><button class="btn btn-sm btn-success btn-block" name="login" type="submit" value="<?php if(isset($log_error)) echo $log_error; ?>" style="font-size:1.25em;">Login</button></center>

							</div><!--col-md-12-->

						</div><!--form-group-->

						
				</fieldset>


			</form>
		</div><!--row-->
		</div><!--well-->
	</div><!--container-->
</section>

 <!--jequery-->
   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <!--<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>-->
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>

<?php

include 'db/db_connection.php';

//declare varialbes

if (isset($_POST['login'])) {
	
	
	$user_email = $_POST['email'];
	$pass = $_POST['password'];
	$remember = $_POST['re'];

	//encrypt password

	$pass = md5($pass);


	$error = false;

	//Validation




	//set remember for 1hr if remember is on

	if ($remember &&  $remember == 'on') {
		
		setcookie("email", $user_email, time()+(60*60*1));
        setcookie("password", $pass, time()+(60*60*1));

	}

	//remember me not checked
        else{
        	session_start();

					$_SESSION['email'] = $user_email;
					$_SESSION['password'] = $pass;
         
            }

            //query db to check user's credentials

            $check = " Select * from admin WHERE email = '$user_email' AND password = '$pass' ";

            // run query

            $run = mysqli_query($con, $check);

            //get number of rows n run query

            if (mysqli_num_rows($run)) {

            	$success = " <div class=' alert alert-success alert-small role= alert'><center>Login Succesful</center></div> ";

            	echo $success;

            	$welcome="<script> window.open('../index.php', '_self'); </script>";

            	echo $welcome;

            	//here session is used and value of $user_email store in $_SESSION.

      		  $_SESSION['email']=$user_email;
            	

            }

            else {

            	

            	$log_error = "<script>alert('Wrong email or password')</script>";

          //$log_error = " <div class='col-md-12'> <div class=' alert alert-danger alert-small role= alert'><center>Wrong Email or Password</center></div> </div> ";

            	echo $log_error;

            	//sleep 5seconds
            	//sleep(10);

            	//redirect page

            	 $refresh="<script>window.location.replace('login.php' ,'_self')</script>";
            	 //sleep(20);  

            	 echo $refresh;
            }



	
}


 ?>


