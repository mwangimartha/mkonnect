<?php

if( $_POST ){

	//session starts here
    session_start();
    
    $qualification  = $_POST['txt_qualification'];

        $_SESSION['txt_qualification']=$qualification;
       
	
	

	?>
    
    <form  action="savequalification.php" method="POST">

    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>View Changes Made</strong> & Click the button below to Save Changes <span class="glyphicon glyphicon-hand-down"></span> <span class="glyphicon glyphicon-hand-down"></span>
    	</div>
    </td>
    </tr>
    
    <tr>
    <td>Experience</td>
     <form action="" method="POST">
    <td><?php echo $qualification ?></td>
    </form>
    </tr>
   
    <tr>
        <td>Save Changes</td>
        <td><button class="btn btn-success" name="save">Save Changes</button></td>
    </tr>
   
    
    </table>
    </form>
    <?php
	
}