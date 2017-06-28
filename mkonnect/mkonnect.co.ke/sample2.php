 <?php
include('header.php');

        //include db
        include('mkonnect/db/db_connection.php');

        if(isset($_POST['marketing'])){

        //declare variable
          $user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
         // $user_num = $_POST['txt_number'];
         // $user_job = $_POST['txt_jobs']; 
  
    
//here query check weather if user already registered so can't register again.
    
    $email_query="select * from marketing WHERE email='".$user_email."'";
    
    $run_query=mysqli_query($con,$email_query);
   
    
     $rows = mysqli_num_rows($run_query);
         
    if($rows>0)
    {
 $check_mail= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

         echo $check_mail;

       // $_POST['marketing']=null;
        //refresh page

         $refresh = "<script>window.open('mkonnect.php','_self')</script>";
         

    }
    else{

     // $_POST['marketing']=null;

        //insert the user into the database.

    $insert_user="insert into marketing (email,job_type,password) VALUES ('$user_job',md5('$user_pass'))";

    if(mysqli_query($con,$insert_user))
    {
       echo"<script>window.open('mkonnect/uploadcv.php','_self')</script>";
       
       
   }
   else{
    echo "<script>alert('Check your details and try again')</script>";
   }

    }


   


}

?>
