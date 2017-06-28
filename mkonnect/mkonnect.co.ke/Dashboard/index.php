<?php

//store information of all pages in variables
   require ("../db.php");
if (!$_SESSION['email']) {

  header("location: Auth/login.php");
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>MKONNECT Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conutent="IE=edge">
    <!--for repsonsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

      <header>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >
        <img  style="width:395px; height: 35px; align="left"" src="images/logo.jpg" >

      </a>
    </div>
    <ul class="nav navbar-nav">

  <li><a href="#" style="color:white; font-size:1.8em;">MKONNECT ADMIN</a></li>
  <li><a href="#" style="color:white; font-size:1.8em;"><?php echo $_SESSION['email'];  ?></a></li>
  <div class="pull-right">
    <div class="dropdown" >
  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:8%;">Account Settings
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#"><input type="submit" class=" btn btn-success btn-sm" value="Reset Password"></a></li>
    <li><a href="Auth/logout.php"><input type="submit" class="btn btn-danger btn-md" value="Log Out" style=" padding-right: 5%;" ></a></li>
  </ul>
</div><!--drop-down-->
</div><!--pull-right-->

    </ul>

  </div>
</nav>
      </header>
      <section>
        <div class="page-content">
            <div class="row">
              <div class="col-md-2">
                <div class="list group" style="width:90%; padding:3%; font-size:1.7em; ">
                  <ul class="list-group" >
                    <li class="list-group-item"><a href="index.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>

                    <li class="list-group-item"><a href="views/cvwriting.php" style="color:#000000;" > <i class="glyphicon glyphicon-pencil"></i> Add CV Writing tips</a></li>
                    <li class="list-group-item"><a href="views/cvwriting.php" style="color:#000000;" > <i class="glyphicon glyphicon-pencil"></i>CV Writing tips Report</a></li>
                    <li class="list-group-item"><a href="views/interviewskills.php" style="color:#000000;"><i class="glyphicon glyphicon-education"></i>Interview Skills Views</a></li>
                    <li class="list-group-item">
                      <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#available_jobs">Available Jobs</button> </li>
                      <div id="available_jobs" class="collapse">
                        <?php
                        $query = "select * from employer_jobs";
                        $query1 = mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($query1)) {
                         ?>
                      <a href="#"><i class="glyphicon glyphicon-ice-lolly-tasted list-group-item"></i><?php echo $row['job_title']; ?></a>
                      <?php } ?>
                    </div>
                    <li class="list-group-item">
                      <button id="job_apps" type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#jobs">job_applications</button> </li>
                  <div id="jobs" class="collapse">
                    <?php
                    $query = "select * from job_category";
                    $query1 = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($query1)) {
                     ?>
                  <a href="#"><i class="glyphicon glyphicon-ice-lolly-tasted list-group-item"></i><?php echo $row['category']; ?></a>
                  <?php } ?>
                </div>
                    <li class="list-group-item"> <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#traffic">Traffic  <span class="glyphicon glyphicon-flash"></span></button> </li>
                  </li>
                    <div id="traffic" class="collapse">
                      <li class="list-group-item"><a href="views/traffic.html" style="color:#000000;" >Facebook</a>
                      <li class="list-group-item"><a href="traffic.html" style="color:#000000;" >Google SEO</a>
                    </div>
                    <li class="list-group-item"> <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#activity">Activity  <span class="glyphicon glyphicon-star"></span></button> </li>
                  </li>
                    <div id="activity" class="collapse">
                      <li class="list-group-item"><a href="views/active.php" style="color:#000000;" >Active Job Seeker <span class="glyphicon glyphicon-eye-open"></span></a>
                      <li class="list-group-item"><a href="views/dormant.php" style="color:#000000;" >Dormant Job seeker &nbsp;<span class="glyphicon glyphicon-eye-close"></span></a>
                    </div>
                    <li class="list-group-item"><a href="help" style="color:#000000;">
                     <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>

                </div><!--listgroup-->
              </div><!--col-md-2-->
             <div class="jumbotron">
      <div id="table_jobs" class="col-md-10">
       <div  class="row">
        <div class="col-md-3">

          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="interviewskills.php"><button class="btn btn-warning btn-lg" style="padding:10%;">Interview Skills</button></a>
            </div><!--panel-->
         </div><!--content-box-small -->

        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="cvwriting.php"><button class="btn btn-warning btn-lg" style="padding:10%;">CV WRITING</button></a>
            </div><!--panel-->
         </div><!--content-box-small -->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="interviewskills.php"><button class="btn btn-warning btn-lg" style="padding:10%;">Help</button></a>
            </div><!--panel-->
         </div><!--content-box-small -->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="interviewskills.php"><button class="btn btn-warning btn-lg" style="padding:10%;">Available Jobs</button></a>
            </div>
          </div><!--card-->
          <div class="card-content">

          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <!--<img src="image/songview.png">-->
          </div><!--card-->
          <div class="card-content">
            <p></p>
          </div><!--card-content-->
        </div><!--col-md-4-->

          <div class="col-md-4">
          <div class="card">
            <!--<img src="image/albumnview.png">-->
          </div><!--card-->
          <div class="card-content">
            <p> </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <!--<img src="image/users.jpeg">-->
          </div><!--card-->
          <div class="card-content">
            <p>  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        </div><!--row-->
        </div><!--col-md-10-->
         </div><!--Jumbotron-->

            </div><!--row-->
        </div><!--page-content-->

    </section>



  </body>
  </html>

  <script>
	$('#job_apps').click(function(){
								console.log('kae');
								$.get(
									'jobs_admin.php',
									function(data) {
										var json = jQuery.parseJSON(data);

										var content = '';
                    var content2= '<div class="table-scrol">';
                      content2 +='<div class="table-responsive">'
                      content2 +='<table class="table table-bordered table-hover table-striped" style="table-layout:fixed">'
                        content2 += '<thead>'
                          content2 +='<tr class="success">'
                             content2 +='<th>ID</th>';
                            content2 +='<th>Name</th>';
                             content2 +='<th>Email </th>';
                             content2 +='<th>Phonenumber </th>';
                             content2 +='<th>Job Category</th>';
                             content2 +='<th>Application Date</th>';
                             content2 +='<th>CV</th>';
                             content2 +='<th>Academic Transcripts</th>';
                             content2 +='</thead>';
                          content2 +='</table>';
                        content2 +='</div>';
                    content2 +='</div>';
						            for (var i = 0; i < json.length; i++) {
						            content += '<tr>';
						            content += '<td>' +json[i].id+'</td>';
						            content += '<td>' + json[i].name + '</td>';
                        content += '<td>' + json[i].email + '</td>';
						            content += '<td>' + json[i].number + '</td>';
                        content += '<td>' + json[i].job_category + '</td>';
						            content += '</tr>';
						            }
										 $('#table_jobs').html(content2);
									}
								);

    });
	</script>
