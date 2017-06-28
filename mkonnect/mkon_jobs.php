 <?php
 	 
    $run_qry = "SELECT * FROM employer_jobs ";
	$getjobs = mysqli_query($con , $run_qry);
	$numrows = mysqli_num_rows($getjobs);
	echo "Jobs Available: $numrows";
    ?>

