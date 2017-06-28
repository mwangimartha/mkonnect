<?php

if( $_POST ){

    //session starts here
    session_start();
	
    $skills = $_POST['txt_skills'];
    //$skills2 = $_POST['txt_skills2'];
	//$skills3 = $_POST['txt_skills3'];

   $_SESSION['txt_skills']=$skills;
   //$_SESSION['txt_skills2']=$skills2;
   //$_SESSION['txt_skills3']=$skills3; 
	

	?>
    
    <form  action="saveskills.php" method="POST">

    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>View Changes Made</strong> & Click the button below to Save Changes <span class="glyphicon glyphicon-hand-down"></span> <span class="glyphicon glyphicon-hand-down"></span>
    	</div>
    </td>
    </tr>
    
    <tr>
    <td class="warning"><strong>Skills</strong></td>
   
    <td><?php echo $skills; ?></td>
    </tr>
    <tr>
    <td></td>
    <td>
    <?php //  if(!isset($skills2)){echo "";}else {echo $skills2;}?>
        
    </td>
    </tr>

    <tr>
    <td></td>
    <td>
    <?php  //if(!isset($skill3)){echo "";}else{echo $skill3;} ?></td>
    </tr>
    
   
    <tr>
        <td>Save Changes</td>
        <td><button class="btn btn-success" name="save">Save Changes</button></td>
    </tr>
   
    
    </table>
    </form>
    <?php
	
}