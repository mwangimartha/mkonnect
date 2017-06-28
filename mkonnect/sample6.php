 <?php
include('header.php');
 ?>


         <?php 

        //include db
        include('mkonnect/db/db_connection.php');

        if(isset($_POST['IT'])){

        //declare variable
          $user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
          $user_num = $_POST['txt_number'];
          $user_job = $_POST['txt_jobs']; 

          //use select query
//here query check weather if user already registered so can't register again.
    
    $select_it="select * from ict WHERE email='".$user_email."'";
    
    $run_it=mysqli_query($con,$select_it);
   
    
     $rows = mysqli_num_rows($run_it);
         
    if($rows>0)
    {
 $eng_it= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

         echo $eng_it;

       
        //refresh page

         $refresh = "<script>window.open('mkonnect.php','_self')</script>";
         

    }
    else{

     // $_POST['marketing']=null;

        //insert the user into the database.

    $it_eng="insert into ict (name,email,phonenumber,job_type,password) VALUES ('$user_name','$user_email','$user_num','$user_job',md5('$user_pass'))";

    if(mysqli_query($con,$it_eng))
    {
       echo"<script>window.open('mkonnect/uploadcv.php','_self')</script>";
       
       
   }
   else{
    echo "<script>alert('Check your details and try again')</script>";
    $refresh = "<script>window.open('mkonnect.php','_self')</script>";

   }

    }
          

        }



        ?>
