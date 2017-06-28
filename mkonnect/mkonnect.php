<?php   
require ("db.php");
session_destroy();
 ?>
 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
    <?php
    require_once 'title.php';
    ?>  
     </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/mkonnect.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
  background-image: url("https://americanlibrariesmagazine.org/wp-content/uploads/2012/12/background_jobs4web.jpg");

}

#about .well{
  height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
}
#job_types{
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtyA7xwFNVFltXxYYlyuiFzYtbshZcECIZThteLMuNgQvgEVAt"); 
  height: auto;
  width: 100%; 
  padding: 40px 0; 
  overflow: hidden;
}

.jobbs {
  background-image: url("https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTwpFj66a4NwG0kr9hDqkNBJFbTF3ISpIPKe-Mvr8w4KEy3AYqV");
  width: 100%;
  height: auto;
  width: auto;
  padding: 40px 0;
  overflow: hidden;
}

 .wow:first-child {
      visibility: hidden;
    }
}
</style>



  </head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  
  <a class="" rel="home" href="#" title="logo">
  <img src="img/logo.jpg"></a>
  <div class="top" style="margin-top:2%; margin-left: 75%;">
  <!-- EDITED BY DAVID on 06/04/2017 -->
 
  
  <a href="#sales" data-toggle="modal" data-target="#sales">
  <button class="bt" style="margin-top:-400%;font-size:15px;color:black;width:80px;"><strong>Register
  </strong></button></a>
  <a href="#sales" data-toggle="modal" data-target="#sales"><button class="btn-floating btn-large pulse" style="font-size: 15px;color:black;width:80;"><strong>Login</strong></button></a>
  
  <a href="#postjob"><button class="btn-floating btn-large pulse" style="font-size: 15px;color:black;width:80px;" ><strong>POSTJOB</strong></button></a><br>
  </div><!--top-->
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav" style="margin-top: 1%;">
<!--<div class="nav-wrapper" id="nav" style="margin-top: 1%;"> -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li class="active"><a href="mkonnect.php">Home</a></li>
          <li class="active"><a href="#shortcode"><strong>ShortCode</strong></a></li>
          <li class="active"><a href="#about">About</a></li>

          <li class="active"><a href="#contacts">Contact</a></li>

      </ul></div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->


<div class="divider" id="section2"></div>

<section class="konnect wow pulse" data-wow-iteration="infinite" data-wow-duration="5000ms" style="margin-top: -8%;">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h1 style="padding:20px;background-color:rgba(5,5,5,.8)">Find Available Jobs Here</h1><!--h2><span class=" glyphicon glyphicon-hand-down" style="color:#4cae4c;"></span></h2> <h2><span class=" glyphicon glyphicon-hand-down"></span></h2><h2><span class=" glyphicon glyphicon-hand-down" style="color:#000;"></h2--></div>
</section>


<section id="job_types" style="margin-top:;" >

  <div class="container">

  <div class="col-md-6">
    <div class="wow fadeInDown" data-wow-delay="1s">

              <a href="#9" style="color:#fff;"><h3>IT</h3></a>
             <a href="#jobs" style="color:#fff;"> <h3>Accounting</h3></a>
             <a href="#jobs" style="color:#fff;"> <h3>Top Management</h3></a>
              <a href="#jobs" style="color:#fff;"><h3>Creatives</h3></a>
              <a href="#3" style="color:#fff;"><h3>Customer Service</h3></a>
             <a href="#3" style="color:#fff;"> <h3>Education</h3></a>
             <a href="#6" style="color:#fff;"> <h3>Farming&Agriculture</h3></a>
              <a href="#6" style="color:#fff;"><h3>Government</h3></a>
             <a href="#6" style="color:#fff;"> <h3>Healthcare & Pharmaceuticals</h3></a>
             <a href="#9" style="color:#fff;"> <h3>Human Resources & Recruitment</h3></a>
             <a href="#9" style="color:#fff;"> <h3>Insurance</h3></a>
             <a href="#12" style="color:#fff;"> <h3>Legal</h3></a>
             <a href="#12" style="color:#fff;"> <h3>Manufacturing & Production</h3></a>
            <a href="#15" style="color:#fff;">  <h3>Minning & Natural Resources</h3></a>

</div><!--wow-->
</div><!--jumbotron-->

 <div class="col-md-6">
  <div class="wow fadeInDown" data-wow-delay="1s">
            <a href="#12" style="color:#fff;"><h3>Marketing, Communications & PR</h3></a>
              <a href="#15" style="color:#fff;"><h3>NGO, Communication</h3></a>
              <a href="#15" style="color:#fff;"><h3>Administration & office Support</h3></a>
             <a href="#16" style="color:#fff;"> <h3>Project/ Project Management</h3></a>
              <a href="#16" style="color:#fff;"><h3>Research, Quality control/ Quality Assurance</h3></a>
              <a href="#16" style="color:#fff;"><h3>Retail</h3></a>
              <a href="#19" style="color:#fff;"><h3>Sales/Business Development</h3></a>
              <a href="#19" style="color:#fff;"><h3>Security</h3></a>
              <a href="#19" style="color:#fff;"><h3>Strategy & Consulting</h3></a>
              <a href="#22" style="color:#fff;"><h3>Tourism & Travel</h3></a>
              <a href="#22" style="color:#fff;"><h3>Trade & Services</h3></a>
              <a href="#22" style="color:#fff;"><h3>Transport,Logistics,Procurement</h3></a>
              <a href="#25" style="color:#fff;"><h3>Real Estate</h3></a>
              <a href="#25" style="color:#fff;"><h3>Hospitality</h3></a>
              <a href="#25" style="color:#fff;"><h3>Others</h3></a>
      </div><!--data-wow-->
  </div><!--col-md-6-->
</div><!--container-->



</section>

<!-- Modal -->
<div class="modal fade" id="sales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">

    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <center><h4 class="modal-title" id="myModalLabel">Register</h4></center>
  </div><!--header-->
  <div class="modal-body">

  <div class="row" style="margin-top:-30%;">
  <section class="wow fadeInDown">
<div class="col-md-12 well " style="padding:10%;" >

        <fieldset>

            <legend><center> <span class="glyphicon glyphicon-user"></span> <span class="glyphicon glyphicon-user"></span></center> </legend>

              <div class="form-group" style="margin-bottom: 28%;">
                <div class="col-md-10">
                <div class="thumbnail">
                  <center><p class="text-danger">If you Already have an account?</p> </center>
                  <h4 style="font-size:1.8em;"><center><a href="#login4">Login</a></center></h4>
                  </div><!--thumnail-->
                </div><!--col-md-10-->
              </div><!--form-group-->


       <form action="register.php" method="POST" id="">
            <div class="form-group">
            <div class="col-md-12">
               <label for="txt_subject" class="control-label text-warning">Enter Email</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

            <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="email" placeholder="Your Email" id="email" type="email" autofocus="" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->

            <div class="form-group">
            <div class="col-md-12">
               <label for="txt_subject" class="control-label text-warning">Enter Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

             <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="password" placeholder="Your Password" type="password" id="password" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->

            <div class="form-group">
            <div class="col-md-12">
               <label for="txt_subject" class="control-label text-warning">Confirm Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

          <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password" id="confirm_password" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->



             <div class="form-group">
                <div class="col-md-8">

         <input class="btn btn-lg btn-success btn-block " type="submit" value="Register" name="accounts"   style="font-size:1.25em;">

                </div><!--col-md-12-->
            </div><!--form-group-->
            </form>

            <div class="form-group">
                <div class="col-md-12">

                  <div class="panel" style="margin-top:2%;">

                  <p class="text-success"><a data-toggle="collapse" href="#forgotten" aria-expanded="false" aria-controls="collapseExample">Forgotten Password</a></p>

                  </div><!--panel-->

                  <div id="forgotten" class="collapse">

                    <form class="form-vertical" action="remind.php" method="POST" id="">
                 <div class="form-group">
            <div class="col-md-12">
               <label for="txt_email" class="control-label text-success" style="text-align:center;">Email</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-12">

                   <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                    <div class="col-md-12" >
                <div class="form-group">


                </div><!--from-group-->
              </div><!--col-md-10-->
              <div class="col-md-12">
                <div class="form-group">
                   <input class="btn btn-lg btn-primary btn-block " type="submit" value="Submit Email" name="accounts"   style="font-size:1.25em;">

                </div>
              </div>
                    </form>

                  </div><!--forgotten-->

                </div><!--col-md--12-->
            </div><!--form-group-->

        </fieldset>

    </div><!--col-md--12-->
    </section>


  <div class="thumbnail">


                    <!--button class="btn btn-success btn-block" data-toggle="collapse" data-target="#login2" >Login</button-->


                        <div id="login2">
                <div class="arrow"></div>

                <div class="popover-content">

                  <div class="panel">

                <legend><center> <span class="glyphicon glyphicon-user"></span> Login <span class="glyphicon glyphicon-user"></span></center> </legend>

                </div><!--panel-->

            <form class="form-vertical" action="login.php" method="POST" id="">
                 <div class="form-group">
            <div class="col-md-12">
               <label for="txt_email" class="control-label">Email</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-12">

                   <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                        <div class="form-group">
            <div class="col-md-12">
               <label for="txt_pass" class="control-label">Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

              <div class="form-group">
              <div class="col-md-12">

            <input class="form-control" name="password" placeholder="Your Password" type="password" id="password1"  required="">

              </div><!--col-md-12-->
               </div><!--form-group-->


                </div>
                <div class="popover-footer" id="login4">
                   <center> <input type="submit" name="login" value="Login" class="btn btn-lg btn-info btn-lg"></input></center>
                </div>

                </form>
            </div><!--mypopoverid-->



                  </div><!--panel-->
</div><!--login2-->
</div><!--row-->
    <center>
                  <!-- PopoverX content -->

</center>



  </div><!--col-md-6-->

    <div class="modal-footer">
    <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
     <button type="button" class="btn btn-lg" data-dismiss="modal" style="background-color: #fed136; color: #fff; font-size: 1.8em;" >Close</button>
  </div><!--modal-footer-->
  </div><!--row-->
</div><!--body-->
</div><!--content-->
<section class="wow fadeInDown" data-wow-duration="1s" >
  <div class="row">
  <div class="container">
  <div class="jumbotron" style="margin-top: 1%;padding-top: 10px;">
  <div class="thumnail">
    <div class="caption">
    <h3 class="text-danger"><center>Apply Below Job as Per Category</center></h3>
    </div>
  </div><!--thumbnail-->

  <?php
  $query = "select * from job_category";
  $query1 = mysqli_query($con,$query);
  // $row = mysqli_fetch_all($query1);
  // var_dump($row);
  // $row1 = array();
  // $counter=0;
  // $size=sizeof($row);
  // echo "<br>";
  // for ($x = 0; $x <= $size; $x++) {
  //   var_dump($row[$x]);
  // }

  // foreach ($row as $row1) {
  //   foreach ($row1 as $row2) {
  //     echo $row2;
  //   }
  // }

  $first=array();
  $second=array();
  $third=array();
    $counter=1;
    $count1=0;
    $count2=0;
    $count3=0;
  while ($row = mysqli_fetch_assoc($query1)) {
          if ($counter==1) {
          $first[$count1]=$row;
              $count1++;
               }
          if ($counter==2) {
  $second[$count2] =$row; $count2++;       }
  if ($counter==3) {
  $third[$count3] =$row; $count3++;
  $counter=0;     }
  $counter++;
      }
  // var_dump($first);
  // echo "<br>";
  // var_dump($second);
  // echo "<br>";
  // var_dump($third);
  // echo "<br>";
  // echo "<br>";
  // echo "<br>";
  // echo sizeof($first);
  // echo sizeof($second);
  // echo sizeof($third);

  $i=0;
  while($i<sizeof($second)){?>

<div class="row">
  <div class="col-md-4">
  <div id="jobs"></div><!--jobs-->
  <div class="panel" style="margin:10%; padding: 10%;">

<p  class="text-success"> <?php $category=array();
 $category=$first[$i];
 echo $category["category"]; ?></p>
<button id="<?php $category=$first[$i];
echo $category["id"];?>" class="cat btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales">Apply</button>
</div><!--dialog-->
</div><!--modal-->


<div class="col-md-4">
  <div class="panel" style="padding:10%; margin:10%;">
  <h3  class="text-success"><?php $category=array();
   $category=$second[$i];
   echo $category["category"]; ?></h3>


<button id="<?php $category=$second[$i];
echo $category["id"];?>" class="cat btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales">Apply</button>
</div><!--dialog-->
</div><!--modal-->

<div class="col-md-4">
  <div class="panel" style="padding:10%; margin:10%;">

  <h3  class="text-success"><?php $category=array();
   $category=$third[$i];
   echo $category["category"]; ?></h3>


<button id="<?php $category=$third[$i];
echo $category["id"];?>" class="cat btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales">Apply</button>
</div><!--dialog-->
</div><!--modal-->
</div><!--row-->
<?php $i++; } ?>


    </div><!--jumbotron-->
     </div><!--container-->
    </div><!--row-->
    </section>

    <div id="about">
      <div class="row">

      <div class="panel">
        <div class="col-md-12">
          <div class=" wow slideInRight" style="margin-left:15%; margin-right: 15%; "  data-wow-delay="1s">
            <h3>Mkonnect is a Job Application system that Profile Matches Employers and Job seekers according to the employer's requirements and the seeker's qualifications. </h3>
            </div><!--col-md-6-->
          </div><!--panel-->
      </div><!--jumbotron-->

      </div><!--row-->
    </div><!--section4-->

    <div id="shortcode">
    <section class="wow fadeInDown" data-wow-delay="1s" style="background-color:#f0ad4e;">
      <div class="row">

        <div class="col-md-6">
          <div class="well" style="margin-left: 0%;">
            <h2 class="text-warning" style="padding:2%; text-align:center;">Interview skills & CV Writing skills</h2>
            <ul class="list-group">
              <li class="list-group-item"> <h5>
                <a href="#" class="pull-left text-warning">'SMS' Interview Skills  to</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 22274 </h5></li>
              </li>
              <li class="list-group-item"><h5>
                <a href="#" class="pull-left text-warning">'SMS' C.V. Writing Skills to</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 22274 </h5>
              </li>

            </ul>
          </div><!--well-->
        </div><!--col-md-10-->



        <div class="col-md-6">
          <div class="well" style="margin-left: 15%; margin-right:25%;">
            <h2 class="text-warning" style="padding:2%;  text-align:center;">JOBS</h2>
            <ul class="list-group">
              <li class="list-group-item"> <h5>
                <a href="#" class="pull-left text-danger" style="font-size:1.7em;">'SMS' Jobs  to</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 22274 </h5></li>
              </li>


            </ul>
          </div><!--well-->
        </div><!--col-md-6-->
      </div><!--row-->
      </section>
    </div><!--scetion4-->

    <!--Post-Jobs-->

<div id="postjob">
<div class="jobbs">
  <div class="row">

  <div class="col-md-12">


        <div class="thumbnail wow slideInRight" data-wow-delay="1s" style="padding-right:0%; width:auto; margin-left: 0%; " >
        <!--div class="panel"-->

          <fieldset style="padding:0%;">

          <h1 style="text-align: center;"><i class="fa fa-registered" aria-hidden="true" fa-5x aria-hidden="true"></i></h1>
           <center><h3 class="text-warning">POST JOBS</h3></center>
            <hr>
            <form method="POST" action="emp_login.php">

              <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Enter Email</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

             <input class="form-control" name="email" placeholder="Your Email" id="email" type="email" autofocus="" required="">

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" style="margin-left:15%">
                <div class="form-group">
                <label><h3>Enter Password</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

              <input class="form-control" name="password" placeholder="Your Password" type="password" id="password1"  required="">

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" >
                <div class="form-group">


              <center><button name="emp_login" class="btn btn-success btn-lg">Login</button></center>

              </form>

              <p class="text-danger" style="text-align:center; margin-top:2%;">
              <a data-toggle="collapse" href="#forgotten_jobs" aria-expanded="false" aria-controls="collapseExample"> Forgotten Password? </a></p>

              <div id="forgotten_jobs" class="collapse">
              <form method="POST" action="remind.php">

                <div class="form-group">
                 <div class="col-md-8">

                   <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                    <div class="col-md-12">
                <div class="form-group">
                   <input class="btn btn-lg btn-primary btn-lg " type="submit" value="Submit Email" name="accounts"   style="font-size:1.25em;">

                </div>
              </div>
              </form>

              </div><!--forgotten_jobs-->

          <p class="text-warning" style="text-align: center;"> If you don't have an account click Below to register <i class="fa fa-hand-o-down" aria-hidden="true"></i></p>
              <center><button class="btn btn-primary btn-lg" a data-toggle="collapse" href="#post_jobs_reg" aria-expanded="false" aria-controls="collapseExample"> Click to Register </button></center>

                </div><!--from-group-->
              </div><!--col-md-10-->


            <div id="post_jobs_reg" class="collapse">

              <div class="breadcrumb">


            <form method="POST" action="emp_reg.php" data-toggle="validator" >


                <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Enter Email</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

             <input class="form-control" name="job_post_email" placeholder="Your Email" type="email" autofocus="" id="email1" required="">

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Enter Password</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%">
                <div class="form-group">

              <input class="form-control" name="job_post_password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
              <div class="help-block">Minimum of 6 characters</div>

                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-12" style="margin-left:15%" >
                <div class="form-group">
                  <label><h3>Confirm Password</h3></label>
                </div><!--from-group-->
              </div><!--col-md-10-->

              <div class="col-md-8" style="margin-left:15%" >
                <div class="form-group">

              <input class="form-control" type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
               <div class="help-block with-errors"></div>

                </div><!--from-group-->
              </div><!--col-md-10-->
              <div class="col-md-8" >
                <div class="form-group" style="margin-left:20%">
              <center><button class="btn btn-info btn-lg" name="job_post_register"> Register To Post Job</button>
              </div></center>

            </form>

            </div><!--breadcrum-->
            </div><!--post_job_reg-->

          </fieldset>

         <!-- </div>panel-->
        </div><!--panel-->
      </div><!--col-md-8-->
</div><!--jobbs-->
</div><!--post-Jobs-->


<div id="contacts" class="wow bounceInLeft" data-wow-offset="200" style="">
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
    <h2 class="text-warning"><em>CONTACT US</em></h2>

      <ul class="list-inline center-block">
        <li><a href="#"><img src="img/icons/soc_fb.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_tw.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_gplus.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_pin.png"></a></li>
      </ul>

    </div><!--/col-->
</div><!--/container-->
</div><!--contacts-->


 <footer class="page-footer">
          <div class="container">
            <div class="row" >
              <div class="col l6 s12">

                <h5 class="white-text">Mkonnect Post Jobs and Also Get Jobs</h5>
  
    <h4 class="white-text"><center>Copyright  &copy<?php
    require_once 'footertitle.php'
    ?>
     Mkonnect&reg.<br>All Rights Reserved</center></h4>
</div>
</div>
  <div class="card blue-grey darken-1" style="float:right; margin-top: -10%;">
            <div class="card-content white-text">
              <span class="card-title">About Mkonnect</span>
              <p>At mkonnect we help Employers<br>To find The Right Candidates,<br>For theier Posted jobs,also<br> the job seekers to find the jobs they are talented with.</p>
              </div>
              </div>
</div>
</footer>
<ul class="nav pull-right scroll-top pull-right">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<!--/col-->
<!--/container-->

<!--/wrap-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<script type="text/javascript">
  /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})

/* google maps */

// enable the visual refresh
google.maps.visualRefresh = true;

var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    // try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // browser doesn't support geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/wow.js"></script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>


<script type="text/javascript">
    $.validator.setDefaults( {
      submitHandler: function () {
        alert( "submitted!" );
      }
    } );

    $( document ).ready( function () {
      $( "#mkonnect" ).validate( {
        rules: {
          firstname: "required",
          lastname: "required",
          username: {
            required: true,
            minlength: 2
          },
          password: {
            required: true,
            minlength: 6
          },
          confirm_password: {
            required: true,
            minlength: 6,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          },
          agree: "required"
        },
        messages: {

          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long",
            equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address",
          agree: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

      $( "#mkonnect2" ).validate( {
        rules: {

          password1: {
            required: true,
            minlength: 6
          },
          confirm_password1: {
            required: true,
            minlength: 6,
            equalTo: "#password1"
          },
          email1: {
            required: true,
            email: true
          },
          agree1: "required"
        },
        messages: {
          firstname1: "Please enter your firstname",
          lastname1: "Please enter your lastname",
          username1: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          confirm_password1: {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long",
            equalTo: "Please enter the same password as above"
          },
          email1: "Please enter a valid email address",
          agree1: "Please accept our policy"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          // Add `has-feedback` class to the parent div.form-group
          // in order to add icons to inputs
          element.parents( ".col-sm-5" ).addClass( "has-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !element.next( "span" )[ 0 ] ) {
            $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
          }
        },
        success: function ( label, element ) {
          // Add the span element, if doesn't exists, and apply the icon classes to it.
          if ( !$( element ).next( "span" )[ 0 ] ) {
            $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
          $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
        },
        unhighlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
          $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
        }
      } );
    } );
  </script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
<script>
$('.cat').click(function() {
    var id = $(this).attr('id');
    console.log(id);
    //$("#w3s").attr("href", "http://www.w3schom");
    $.post(
      'cat.php',
      { id: id },
      function(data) {
        console.log(data);
      }
    );
});
</script>
<!-- tracking id -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82690321-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
