<?php
include('header.php');
 ?>
<?php

include("db/db_connection.php");//make connection here
if(isset($_POST['cv_writing']))
{
    $user_name=$_POST['txt_name'];//here getting result from the post array after submitting the form.
    $user_email=$_POST['email'];//same
    $user_num=$_POST['txt_number'];
   
    
  
    
//here query check weather if user already registered so can't register again.

    $check_email_query="select * from cv_writing WHERE email='".$user_email."'";
    $run_query=mysqli_query($con,$check_email_query);
   
     $results = mysqli_num_rows($run_query);
         
    if($results>=0)
    {
        $mail_exists= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

         echo $mail_exists;


        //refresh page

         $refresh = "<script>window.open('../mkonnect.php','_self')</script>";
         echo $refresh;

    }

    else{

        //insert the user into the database.

    $insert_user="insert into cv_writing (name,email,phonenumber) VALUES ('$user_name','$user_email','$user_num')";

     }


    if(mysqli_query($con,$insert_user))
     {
        echo"<script>window.open('thanks.php','_self')</script>";
    }

}

?>