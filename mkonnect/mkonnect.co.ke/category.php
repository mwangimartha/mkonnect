<?php


if( $_POST ){
        session_start();//session starts here

	$category = $_POST['txt_category'];

        $_SESSION['txt_category']=$category;
        //$_SESSION['id']=$user_id;


	?>
       <form  action="savecategory.php" method="POST">
    <table class="table table-striped" border="0">

    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>View Changes Made</strong> & Click the button below to Save Changes <span class="glyphicon glyphicon-hand-down"></span> <span class="glyphicon glyphicon-hand-down"></span>
    	</div>
    </td>
    </tr>

    <tr>

    <td>Job Category</td>



     <td><?php $con = mysqli_connect("localhost", "root", "", "m_konnect");
		 $db = "job_category";

		 $select_db=mysqli_select_db($con,$db);

		 $query = "select * from job_category WHERE id=$category";
		 $query1 = mysqli_query($con,$query);

		 $row = mysqli_fetch_assoc($query1);
			 echo $row['category']; ?></td>


    </tr>

    <tr>
        <td>Save Changes</td>
        <td><button class="btn btn-success" name="save">Save Changes</button></td>
    </tr>

    </table>
    </form>
    <?php

}
