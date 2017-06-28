   
        <?php 

        //include db
        include('db/db_connection.php');

        if(isset($_POST['marketing'])){

        //declare variable
          $user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
          $user_num = $_POST['txt_number'];
          $user_job = $_POST['txt_jobs']; 

          //use select query

     $select_query = "select * from interview_skills WHERE email='".$user_email."'";

      $run_query=mysqli_query($con,$select_query)  or die(mysqli_error($con));
    
     $rows = mysqli_num_rows($run_query);
         
    if($rows>0){

         //  $mail_exist= "<script>$('#thankyouModal').modal('show')</script>";
             $mail_exist = '<div class="alert alert-danger"> Please check your details and try again later</div>';

          //   sleep(5);
             //refresh page
            // $redirect = "<script>window.open(mkonnect.php)</script>";

          }
          
          

            //insert into db
  $insert_query = "insert into marketing (name,email,phonenumber,job_type,password) VALUES ('$user_name','$user_email','$user_num','$user_job',md5('$user_pass'))";

            if (mysqli_query($con,$insert_query)){

              $run = "<script>window.open(cvs.html)</script>";
              echo $run;
            }
            else{
             // $eror = "<script>alert('please check your details and try again')</script>";
              $eror ='<div class="alert alert-danger"> Please check your details and try again later</div>';
            

              sleep(5);

              //redirect page
              echo "<script>window.open('mkonnect.php')</script>";
            }
          

        }



        ?>