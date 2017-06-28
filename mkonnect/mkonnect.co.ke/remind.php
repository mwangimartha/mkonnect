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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="https://trello-attachments.s3.amazonaws.com/57cd66c81620c41c25537e9d/5873245b02367ea3926a590e/a21f54e3c2a9e3fd4cc4c9c3188f1b14/thanks.jpg">
      <div class="caption">
      <center><p class="text-warning" style="font-size:2em;"> Please check your email for your password reset link.
      </center>
		

     <center><a href="postjob.php#posts"><button class="btn btn-warning btn-lg">View Report</button></a></center>
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
	$email = $_POST['email'];
	$query = "SELECT * FROM `users` WHERE `email` = '".$email."'";
	$link = "mkonnect.php";

	$result = mysqli_query($con,$query);
	$numrows = mysqli_num_rows($result);;

	if ($numrows == 1){
		while($row = mysqli_fetch_array($result)){
			$rand = md5(rand(10000000,99999999));
			require 'mailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			$mail->Host = "smtp.ipage.com";
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->Username = "bulksms@uxt.co.ke";
			$mail->Password = "UXTBulkSMS15";
			$mail->setFrom('bulksms@uxt.co.ke', 'Mkonnect');
			$mail->addReplyTo('bulksms@uxt.co.ke', 'Mkonnect');
			$mail->addAddress($row['email'], $row['name']);
			$mail->Subject = 'Mkonnect - Password Reset';
			$body = '
			<html>
			<body>
			<p>Hi '.$row['name'].',</p>
			<p>Please click the link below to reset your password in the Mkonnect System</p>
			<p><a href="http://41.139.138.45/navmenu/mkonnect/reset.php?email='.$row['email'].'&key='. $rand .'">http://41.139.138.45/navmenu/mkonnect/reset.php?email='.$row['email'].'&key='. $rand .'</a>
			<p>Regards,<br />Mkonnect Team</p>
			</body>
			</html>
			';
			$mail->msgHTML($body);
			if (!$mail->send()) {
				$lmsg = "Mailer Error. Please confirm your entries and try again ";
			} else {
				$query = "UPDATE `users` SET `pass_verification` = '".$rand."' WHERE `user_id` = '".$row['user_id']."'";
				mysqli_query($con,$query);
				$lmsg ="<script> $('#success').modal('show');</script>";
				echo $lmsg;

			}
		}
	}
	elseif ($numrows == 0) {
		$lmsg = 'Invalid Email Address. Please confirm your email and try again.';
	}
	elseif ($numrows > 1) {
	$lmsg = "System Error - Please contact the system administrator.";
	}
	$_SESSION['lmsg'] = $lmsg;
	header( 'Location: '.$link );
?>
