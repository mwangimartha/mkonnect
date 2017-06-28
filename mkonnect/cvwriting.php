
<?php


//include db
include('db/db_connection.php');

if(isset($_POST['cv'])){

	//declare variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$num = $_POST['txt_number'];
	$pass = $_POST['txt_pass'];

	//check whether email exist
	//select query
	$select_query = "select * from cv WHERE email='$email'";

	//run query
	$run_query = mysqli_query($con,$select_query);

	if(mysqli_num_rows($run_query)>0){

		$mail_exist = "<script>alert('Your are already registered for the Training')</script>";
		echo $mail_exist;

	}

	//insert into db

	$insert = " insert into cv(name,email,phonenumber,password) VALUES('$name','$email','$num',md5('$pass')";

	if(mysqli_query($con,$insert)){

		$cv="<script>window.open('cvs.html')</script>";
	}

	else{
		"<script> alert ( 'Please check your details and try again.')</script>";

                     //redirect page

                  //   $refresh="<script>window.location.replace('../mkonnect.php' ,'_self')</script>";

                    // echo $refresh;

	}




}

 ?>