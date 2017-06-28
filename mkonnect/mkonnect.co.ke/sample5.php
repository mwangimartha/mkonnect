 <?php
include('header.php');
 ?>


         <?php 

        //include db
        include('mkonnect/db/db_connection.php');

        if(isset($_POST['accounts'])){

        //declare variable
          //$user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
          //$user_num = $_POST['txt_number'];
          //$user_job = $_POST['txt_jobs']; 

//here query check weather if user already registered so can't register again.
    
    $select_acc="select * from accounts WHERE email='".$user_email."'";
    
    $run_acc=mysqli_query($con,$select_acc);
   
    
     $rows = mysqli_num_rows($run_acc);
         
    if($rows>0)
    {
 $eng_acc= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

         echo $eng_acc;

       
        //refresh page

         $refresh = "<script>window.open('mkonnect.php','_self')</script>";
         

    }
    else{

     // $_POST['marketing']=null;

        //insert the user into the database.

    $insert_acc="insert into accounts (email,,password) VALUES ('$user_email',md5('$user_pass'))";

    if(mysqli_query($con,$insert_acc))
    {
       echo"<script>window.open('mkonnect/jobs.php','_self')</script>";
       
       
   }
   else{
    echo "<script>alert('Check your details and try again')</script>";
    exit();
    //$refresh = "<script>window.open('mkonnect.php','_self')</script>";

   }

    }
               

        }



        ?>
