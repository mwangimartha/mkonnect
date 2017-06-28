<?php 
require 'db.php';
if(isset($_POST['reset'])){
	$email = $_POST['email'];

	//select query
	$query = "select * from users where email='".$email."'";
	//check row
	$numrow = mysqli_num_rows($query);
	$query1= mysqli_query($con, $query);
	//$row=mysqli_fetch_array($query1);
	//$db_mail= $row['email'];

	//echo "".$db_mail."";

	if($numrow!=0){
		while ($row=mysqli_fetch_array($query1)) {
			
			$db_email = $row['email'];	
			
		}
			if($email == $db_email){
			$code= rand(1000,1000000);
			$to= $db_email;
			$subject= "Password Reset";
			$body =" 
			<p>This is an automated Email please do not reply to this.</p>
			<p>Click the link below or paste in a browser.</p>
			<h3>http://mkonnect.co.ke/remind2.php?code=$code&email=$email</h3>
			";
			mysqli_query("UPDATE users SET passreset='$code' WHERE email='$email'");
			mail($to,$subject,$body);
			echo "Check  Your Email";
		}
		else{
			echo "<script>alert('".$email.", incorrect enter the email you registered with')</script>";
		}
	} 
	else{
		echo "<script>alert('".$email." does Not exist, your db mail is ".$db_mail."')</script>";
	}
}

?>
	