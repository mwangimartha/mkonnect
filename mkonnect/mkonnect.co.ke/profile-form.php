<?php

if( $_POST ){
	
    $email = $_POST['txt_email'];
    $location = $_POST['txt_location'];
    $pass = $_POST['txt_password'];
    $phone = $_POST['txt_phone'];
	
	

	?>
    
    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-success">
    		<strong>View Changes</strong> <span class="glyphicon glyphicon-hand-down"></span> 
    	</div>
    </td>
    </tr>
     <form action="" method="POST">
    <tr>
    <td>Email</td>
    <td><?php echo $email ?></td>
    </tr>

    <tr>
    <td>PhoneNumber</td>
    <td><?php echo $phone ?></td>
    </tr>
    </form>
    <tr>
    <td>Password</td>
    <td><span id="A1" contenteditable style="font-size: 2em;"><strong>......</strong></span></td>
    </tr>
   
    <tr>
        <td>Save Changes</td>
        <td><button class="btn btn-warning">Save Changes</button></td>
    </tr>
   
    
    </table>
    <?php
	
}