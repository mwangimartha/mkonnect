<?php
require ("db.php");
$user_id = $_SESSION['id'];
if ( $_SESSION['auth'] != true) {
  header("Location: mkonnect.php");
}``
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <!--favicon-->
       <link rel="icon" type="image/png" href="img/favicon.ico" sizes="32x32" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/profile.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;

}
</style>


  </head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70">
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
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

          <li class="active"><a href="postjob.php"><strong>POST Jobs </strong></a></li>


          <li class="active"><a href="#contacts">Contacts</a></li>
          <li class="active"><a href="logout.php">LogOut</a></li>

      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<hr>
<div class="container">
  <div class="row">

      <div class="col-sm-10"><h1 class="text-info"><img src="http://proptima.co/files/large/50a37cd690a4ab73e0c2ee5c3f212bf7.jpg"><?php  $select_log = "select * from profiles WHERE user_id=$user_id";

      $query = mysqli_query($con, $select_log);
      $row = mysqli_fetch_array($query);
        $fullname = $row['fullname'];  echo "WELCOME"." ".$fullname;?></h1></div>
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="img/logo.PNG"></a></div>

    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->

          <ul class="list-group">



          <!--ul class="list-group">

      <li class="list-group-item" style="font-size:1.5em; color:black;"><a href="profile.php"><center><span class="glyphicon glyphicon-user"></span> <strong> Profile </strong></center></a></li>
      <!--<li class="list-group-item" style="font-size:1.5em; color:black;"><a href="jobs.php"> <center><i class="fa fa-external-link" aria-hidden="true"></i> <strong> Edit Profile </strong> </center></a></li>-->
      <!--<li class="list-group-item" style="font-size:1.5em; color:black;"><a href="uploadcv.php"> <center> <i class="fa fa-cloud-upload" aria-hidden="true"></i><strong>Upload C.V. </strong></center></a></li>-->
      <li class="list-group-item" style="font-size:1.5em; color:black;"><a href="#"> <center><?php include("help.php"); ?>
</strong></center></a></li>

    </ul-->


          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
              <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>

        </div><!--/col-3-->
      <div class="col-sm-9">

          <ul class="nav nav-tabs" id="myTab">


            <li class="active"><a href="#profile" data-toggle="tab">Job Profile</a></li>

            <li><a href="#edit-profile" data-toggle="tab">Edit Job Profile</a></li>
            <li><a href="#jobs" data-toggle="tab">Available Jobs</a></li>

            <li><a href="#messages" data-toggle="tab">Messages</a></li>

            <li><a href="#shortcode" data-toggle="tab">ShortCode Service</a></li>

            <li><a href="#CV" data-toggle="tab">CV Writing</a></li>

            <li><a href="#Interviewskills" data-toggle="tab">Interview Skills</a></li>

            <!--li><a href="#settings" data-toggle="tab">Settings</a></li-->

          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="profile">
              <div class="table-responsive">

                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->

              <hr>
             <div class="row">
                <div class="jumbotron wow fadeInDown" data-wow-delay="">
                <div class="col-md-12">
                  <div class="panel">
                    <h2><center><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;FUll Name &nbsp;&nbsp; <span class="glyphicon glyphicon-user"></span></center></h2>

                  </div><!--panel-->
                  <div class="thumbnail">
        <table class="table table-striped" border="0">

          <tr>
    <td colspan="2">
      <div class="alert alert-info">
        <strong><center><?php
         $select_log = "select * from profiles WHERE user_id=$user_id";

        $query = mysqli_query($con, $select_log);
        $row = mysqli_fetch_array($query);
          $fullname = $row['fullname'];
          echo $fullname;
 ?></center></strong>
      </div>
    </td>
    </tr>

    <tr>

    <td><?php #echo $fname ?></td>
    </tr>


    </table>
    <?php ?>
                  </div><!--thumbnail-->
                </div><!--col-md-12-->

                <div class="col-md-12">
                  <div class="panel">

                    <h2><center><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Email &nbsp;&nbsp; <span class="glyphicon glyphicon-envelope"></span></center></h2>
                  </div><!--panel-->
                  <div class="thumbnail">
          <table class="table table-striped" border="0">

    <tr>
    <td colspan="2">
      <div class="alert alert-info">
        <strong><center><?php
         $select_log = "select * from users WHERE user_id=$user_id";
        $query = mysqli_query($con, $select_log);
        $row = mysqli_fetch_array($query);
          $fullname = $row['email'];
          echo $fullname;
 ?></center></strong>
      </div>
    </td>
    </tr>

    <tr>

    <td><?php #echo $fname ?></td>
    </tr>


    </table>
    <?php ?>


                  </div><!--thumbnail-->
                </div><!--col-md-12-->

                <div class="col-md-12">
                  <div class="panel">
                    <h2><center>Job Category</center></h2>
                  </div><!--panel-->

                  <div class="thumbnail">
                     <table class="table table-striped" border="0">

    <tr>
    <td colspan="2">
      <div class="alert alert-info">
        <strong><center><?php
         $select_log = "select * from job_applications WHERE user_id=$user_id";

        $query = mysqli_query($con, $select_log);
         $i=1;
        while($row = mysqli_fetch_array($query)) {
          $id = $row['category_id'];
          if (isset($id)) {
            $select_cat = "select * from job_category WHERE id=$id";
            $query1 = mysqli_query($con, $select_cat);
            $row1 = mysqli_fetch_array($query1);
              $category = $row1['category'];
              echo $i."."." ".$category."</br>";   $i++;     }
          }

 ?></center></strong>
      </div>
    </td>
    </tr>

    <tr>

    <td><?php #echo $fname ?></td>
    </tr>


    </table>
    <?php ?>
                  </div><!--thumbnail-->

                </div><!--col-md-12-->

                <div class="col-md-12">
                  <div class="panel">
                    <h2><center><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Courses &nbsp;&nbsp;<span class="glyphicon glyphicon-folder-open"></span></center></h2>
                  </div><!--panel-->
                  <div class="thumbnail">

               <table class="table table-striped" border="0">

    <tr>
    <td colspan="2">
      <div class="alert alert-info">
        <strong><center><?php
         $select_log = "select * from courses WHERE user_id=$user_id";

        $query = mysqli_query($con, $select_log);
        $row = mysqli_fetch_array($query);
          $course = $row['course_name'];
            echo $course; ?></center></strong>
      </div>
    </td>
    </tr>

    <tr>

    <td><?php #echo $fname ?></td>
    </tr>


    </table>
    <?php ?>

                  </div><!--thumbnail-->
                </div><!--col-md-12-->

                <div class="col-md-12">
                  <div class="panel">

                    <h2><center><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Experience&nbsp;&nbsp;<span class="glyphicon glyphicon-education"></span></center></h2>

                  </div><!--panel-->
                  <div class="thumbnail">
           <table class="table table-striped" border="0">

    <tr>
    <td colspan="2">
      <div class="alert alert-info">
        <strong><center><?php
         $select_log = "select *  from profiles WHERE user_id=$user_id";

        $query = mysqli_query($con, $select_log);
        $row = mysqli_fetch_array($query);
          $experience = $row['experience'];
            echo $experience." "."years"; ?></center></strong>
      </div>
    </td>
    </tr>

    <tr>

    <td><?php #echo $fname ?></td>
    </tr>


    </table>
    <?php ?>
                  </div><!--thumbnail-->
                </div><!--col-md-12-->

                <div class="col-md-12">
                  <div class="panel">
                    <h2><center>Skills</center></h2>
                  </div><!--panel-->

                  <div class="thumbnail">
                     <table class="table table-striped" border="0">

    <tr>
    <td colspan="2">
      <div class="alert alert-info">
        <strong><center><?php
         $select_log = "select *  from skills WHERE user_id=$user_id";

        $query = mysqli_query($con, $select_log);
        $row = mysqli_fetch_array($query);
          $skill = $row['skill'];
            echo $skill;  ?></center></strong>
      </div>
    </td>
    </tr>

    <tr>

    <td><?php #echo $fname ?></td>
    </tr>


    </table>
    <?php ?>
                  </div><!--thumbnail-->

                </div><!--col-md-12-->

                </div><!--jumbotron-->
                </div><!--row-->






             </div><!--/tab-pane-->






              <div class="tab-pane" id="edit-profile">

              <hr>
              <hr >

              <div class="row">

                 <div class="col-md-12">
                 <div class="list-group" style="margin-top:2%;">
                   <ul class="list-group">
                     <li class="list-group-item">
                       <h4 class="text-warning" style="text-align: :center;">Update your Job Profile Below, incase:</h4>
                       <h5>
                       <li style="padding:2%;">You have more than one Job category or area of specialization for example You are skilled in IT and Accounting</li>
                       <li style="padding:2%;"> your Years of Experience are More</li>
                       <li style="padding:2%;">Any Skill that you have added in the course of time</li>

                       <li style="padding:2%;">You have done another courses in the course of time.</li>
                        </h5>
                     </li>
                   </ul>
                 </div><!--list-group-->
               <div class="well" >
                <div class="col-md-6">
                 <div class="panel">
                   <div class="thumbnail">

                        <div id="form-category">

                       </div><!--form-content-->

                   </div><!--thumbnail-->
                 </div><!--panel-->
                 </div><!--col-md-6-->

                 <div class="col-md-6-">


                  <div class="addcategory" >

                <div class="col-md-6">


                </div><!--col-md-6-->



                <?php include("category-help.php"); ?>

          <div id="form-category">

      <form method="post" id="reg-category" autocomplete="off">

        <select class="form-control" name="txt_category" id="category">
                  <?php
                  $db = "job_category";

                  $select_db=mysqli_select_db($con,$db);

                  $query = "select * from job_category";
                  $query1 = mysqli_query($con,$query);

                  while ($row = mysqli_fetch_assoc($query1)) {
                    echo "<option value='".$row['id']."'>".$row['category']."</option>";
                  }
                   ?>
                </select>


        <hr />
         <div class="form-group">
          <button class="btn btn-warning btn-block" style="font-size:1.7em;">Click to Add Job Category & View Changes</button>
        </div><!--form-group-->

      </form>

            </div><!--form-content-->

            </div><!--addskill-->
            </div><!--col-md-6-->
             </div><!--well-->
             </div><!--col-md-12-->
             <hr>

              <div class="col-md-12">
               <!--div class="well wow slideInLeft" data-wow-delay="1s">
                <div class="col-md-6">
                 <div class="panel">
                   <div class="thumbnail">
                     <!--div id="form-qualification">

                       </div--><!--form-content-->

                   <!--/div><!--thumbnail-->
                 <!--/div><!--panel-->
                 <!--/div><!--col-md-6-->

                    <!--?php #include("qualification-help.php"); ?>

                    <div class="adds">

                      <div id="form-qualification">

      <!--form method="post" id="reg-qualification" autocomplete="off">

        <!--div class="form-group">

          <input type="text" class="form-control" name="txt_qualification" id="category" placeholder="Add experience in years" required />
        </div--><!--form-group-->
        <hr />
         <!--div class="form-group">
          <button class="btn btn-warning btn-block" style="font-size:1.7em;">Click to Add Experience & View Changes</button>
        </div--><!--form-group-->

      <!--/form-->

            <!--/div><!--form-content-->

            <!--/div><!--adds-->
               <!--/div><!--well-->
             </div><!--col-md-12-->

             <div class="col-md-12">
               <div class=""  >
                <div class="col-md-6">
                 <div class="panel">
                   <div class="thumbnail">

                      <div id="form-skills">

                       </div><!--form-skills-->

                   </div><!--thumbnail-->
                 </div><!--panel-->
                 </div><!--col-md-6-->

                 <?php include("skills-help.php"); ?>

                 <div class="addskills well">

          <div id="form-skills">

      <form method="post" id="reg-skills" autocomplete="off">

        <div class="form-group">
        <div class="add_skills">
          <!--button class="btn btn-info btn-lg" style="font-size:1.3em;">Click to Add More Skills & View Changes</button-->
          </div>
          <div class="adds">
    <button class="categories btn-info btn-lg">Add More Fields</button>
    <div>
    <input type="text" class="form-control" name="txt_skills" id="skills" placeholder="Add skills" required />
    </div>
</div>
          
        </div>
        <hr />
         <div class="form-group">

          <button class="btn btn-warning btn-lg" style="font-size:1.7em;">Click View Changes</button>
        </div><!--form-group-->

      </form>

            </div><!--form-content-->
            </div><!--addskill-->

               </div><!--well-->
             </div><!--col-md-12-->
             
      
              <hr>

             <div class="col-md-12 "  data-wow-offset="300">
               <div class="well">
                <div class="col-md-6">
                 <div class="panel">
                   <div class="thumbnail">

                      <div id="form-courses">

                       </div><!--form-content-->

                   </div><!--thumbnail-->
                 </div><!--panel-->
                 </div><!--col-md-6-->

                  <?php include("course-help.php"); ?>

                 <div class="addskills">

          <div id="form-courses">

      <form method="post" id="reg-courses" autocomplete="off">

        <div class="form-group">
          <input type="text" class="form-control" name="txt_courses" id="courses" placeholder="Add courses" required />
        </div>
        <hr />
         <div class="form-group">
          <button class="btn btn-warning btn-block" style="font-size:1.7em;">Click to Add Courses & View Changes</button>
        </div><!--form-group-->


      </form>

            </div><!--form-content-->
            </div><!--addskill-->

               </div><!--well-->
             </div><!--col-md-12-->


              </div><!--row-->




             </div><!--edit-profile-->


              <!--Available Jobs -->
              <div class="tab-pane" id="jobs">
                  <div class="well">
                    <center><h3 class="text-danger">Available Jobs</h3></center>
                    <div class="caption panel">
                      <h2>Job Description</h2>
                      <ul>
<li><strong>social media marketing</strong>: developing a distinct online presence by attracting high numbers of internet followers through social media channels such as Facebook, Twitter, YouTube and Instagram.</li>
<li><strong>search engine optimisation (SEO)</strong>: developing strategies to increase the number of visitors to a website by achieving high-ranking placements in search results.</li>
<li><strong>pay-per-click (PPC) campaigns</strong>: sponsored online advertising paid for by the business to appear alongside non-paid search results.</li>
<li><strong>mobile marketing</strong>: includes app-based, in-game, location-based and SMS marketing.</li>
<li><strong>affiliate marketing</strong>: where a business allows other businesses (affiliates) to sell products on their website. The affiliate is paid commission for each customer brought to the website by their own marketing strategies.</li>
</ul>
                      <h3>Requirements</h3>
                      <ul>
<li>create and upload copy and images for the organisation's website;</li>
<li>write and dispatch email marketing campaigns;</li>
<li>provide accurate reports and analysis to clients and company management to demonstrate effective return on investment (ROI);</li>
<li>research new online media opportunities that may benefit the business including mobile, social media, development of blogs and forums;</li>
<li>design website banners and assist with web visuals;</li>
<li>communicate with clients, affiliate networks and affiliate partners;</li>
<li>conduct keyword research and web statistics reporting;</li>
<li>contribute to social media engagement and brand awareness campaigns;</li>
<li>use web analytics software to monitor the performance of client websites and make recommendations for improvement;</li>
<li>contribute to company and industry blogs and manage e-communications;</li>
<li>assist with paid media - including liaising with digital advertising agencies;</li>
<li>develop and integrate content marketing strategies;</li>
<li>keep up to date with current digital trends;</li>
<li>manage the contact database and assist with lead generation activities;</li>
<li>negotiate with media suppliers to achieve the best price for clients.</li>
</ul>
<h4 id="salary">Salary</h4>
<p>Ksh.20,0000</p>
                     <a href="jobs.php"> <button class="btn btn-warning btn-lg">Apply</button></a>
                     <?php
                     //connect to db
                     //connect to db
                     include 'db/db_connection.php';

                     //select query to view users
                     $view_admin_query = " select * from employer_jobs ORDER BY id desc";
                     //run the sql query

                     $run = mysqli_query($con, $view_admin_query);

                     //while fetches  the result and store in an array row

                     while ($row = mysqli_fetch_array($run)) {

                       $user_id = $row[0];
                       $job_title = $row[1];
                       $company_name = $row[2];
                       $job_category= $row[3];
                       $experience= $row[4];
                       $post_date = $row[6];






                      ?>

                     <h2><?php echo $job_title; ?></h2>
                     <!--h2>Job Description</h2-->
                     <div><?php echo $company_name; ?></div>
                      <a href="jobs.php"> <button id="<?php  echo $user_id;?>" class="btn btn-warning btn-lg">Apply</button></a>
                      <?php } ?>


                    </div><!--caption-->

                  </div>
              </div><!--jobs-->


             <div class="tab-pane" id="messages">

               <h2></h2>

               <ul class="list-group">
                  <li class="list-group-item text-muted">Inbox</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">message or Notifications they will be received via phone thru text or via this job portal</a> 2.13.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">message or Notifications they will be received via phone thru text or via this job portal</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">message or Notifications they will be received via phone thru text or via this job portal</a> 2.11.2014</li>

                </ul>

             </div><!--/tab-pane-->

             <div class="tab-pane" id="shortcode">
                <h3 style="margin-bottom:2%;">SMS Your Job Category to 22274 as shown below <i class="fa fa-level-down" aria-hidden="true"></i> </h3>
                <ul class="list-group">
                  <li class="list-group-item text-muted">Short</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' Accounting  to</a> 22274</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' Marketing  to</a> 22274</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' ICT  to</a> 22274</li>

                </ul>

             </div><!--shortcode-->

             <div class="tab-pane" id="CV">
                <h3 style="margin-bottom:2%;">SMS Your skills to 22274 as shown below <i class="fa fa-level-down" aria-hidden="true"></i> </h3>
                <ul class="list-group">

                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' cvskills  to</a> 22274</li>


                </ul>

             </div><!--c.v. writing-->

             <div class="tab-pane" id="Interviewskills">
                <h3 style="margin-bottom:2%;">SMS Interview to 22274 as shown below <i class="fa fa-level-down" aria-hidden="true"></i> </h3>
                <ul class="list-group">
                  <li class="list-group-item text-muted">Interview skills</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' interview  to</a> 22274</li>


                </ul>

             </div><!--interviewskills-->


             <div class="tab-pane" id="settings">

                <div class="col-md-8">
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">


                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="phone"><h4>PhoneNumber</h4></label>
                              <input type="text" class="form-control" name="txt_phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Confirm PhoneNumber</h4></label>
                              <input type="text" class="form-control" name="txt_mobile" id="mobile" placeholder="Confirm Number number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="txt_email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" name="txt_location" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="txt_password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify Password</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" name="txt_password" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>View Changes</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
                </div><!--col-md-6-->

                <div class="col-md-4">
                  <div class="panel">

                  <div id="registration">

                  </div><!--form-content-->

                  </div><!--panel-->
                </div><!--col-md-4-->
              </div><!--/tab-pane-settings-->

              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->




<div class="divider" id="section2"></div><!--divider-->

<section class="konnect wow pulse" data-wow-iteration="infinite" data-wow-duration="4800ms">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h1 style="padding:20px;background-color:rgba(5,5,5,.8)">Tell a Friend To find Jobs here</h1></div>
</section>






<div id="contacts " class="wow slideInLeft" data-wow-duration="4s">
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
    <h2><em>CONTACT US</em></h2>

      <ul class="list-inline center-block">
        <li><a href="#"><img src="img/icons/soc_fb.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_tw.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_gplus.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_pin.png"></a></li>
      </ul>

    </div><!--/col-->
</div><!--/container-->
</div><!--contacts-->

  <div id="footer">
  <div class="container">
    <h4 style="color:#fff;"><center>Copyright ©2016 Mkonnect.</center></h4>
  </div>
</div>

<ul class="nav pull-right scroll-top pull-right" >
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

</div><!--/col-->
</div><!--/container-->

</div><!--/wrap-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>






<script src="js/wow.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/wow.js"></script>

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


<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>





            <script type="text/javascript">
$(document).ready(function() {

  // submit form using $.ajax() method

  $('#reg-form').submit(function(e){

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
      url: 'submit.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-content').fadeOut('slow', function(){
        $('#form-content').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
  });

});
</script>

<!--Job-
-->

   <script type="text/javascript">
$(document).ready(function() {

  // submit form using $.ajax() method

  $('#reg-category').submit(function(e){

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
      url: 'category.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-category').fadeOut('slow', function(){
        $('#form-category').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
  });

});
</script>

<!-- Qualifications-->

<script type="text/javascript">
$(document).ready(function() {

  // submit form using $.ajax() method

  $('#reg-qualification').submit(function(e){

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
      url: 'qualification.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-qualification').fadeOut('slow', function(){
        $('#form-qualification').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
  });

});
</script>
<script>
  $(document).ready(function() {
    var max_fields      = 2; //maximum input boxes allowed
    var wrapper         = $(".adds"); //Fields wrapper
    var add_button      = $(".categories"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" class="form-control" name="txt_skills2" id="skills" placeholder="Add skills" required /><a href="#" class="remove_field text-danger" style="font-size:1em;">Remove</a></div>   <div><input type="text" class="form-control" name="txt_skills3" id="skills" placeholder="Add skills" required /><a href="#" class="remove_field text-danger" style="font-size:1em;">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>


<!-- skills-->

<script type="text/javascript">
$(document).ready(function() {

  // submit form using $.ajax() method

  $('#reg-skills').submit(function(e){

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
      url: 'skills.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-skills').fadeOut('slow', function(){
        $('#form-skills').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
  });

});
</script>


<!-- skills-->

<script type="text/javascript">
$(document).ready(function() {

  // submit form using $.ajax() method

  $('#reg-courses').submit(function(e){

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
      url: 'courses.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-courses').fadeOut('slow', function(){
        $('#form-courses').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
  });

});
</script>

<!--registrationForm-->

<script type="text/javascript">
$(document).ready(function() {

  // submit form using $.ajax() method

  $('#registrationForm').submit(function(e){

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
      url: 'profile-form.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#registration').fadeOut('slow', function(){
        $('#registration').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
  });

});
</script>

  </body>
</html>
