<?php  require ("db.php");
      if ($_SESSION['auth'] != true) {
        header("Location: mkonnect.php#postjob");
      }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>POST JOB</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css">




    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
     <link rel="stylesheet" href="css/updateprofile.css">
     <!--link href="css/editors.css" rel="stylesheet"-->
          <style type="text/css">

          .post_jobs{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;
  color: black;
 /*background-image: url("https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRWX6JKymovdy82Lsj0loepdN_dYNayblulZNvC5BCgH3AO3pRK");*/

}

     </style>
</head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70" class="jumbotron">
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
          <li class="active"><a href="#posts">List Of Jobs Posted</a></li>
          <li class="active"><a href="#contacts">Contact</a></li>
          <li class="active"><a href="#contacts">LogOut</a></li>

      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->


<section>
<div class="row wow  slideInLeft" style="margin-top:-4%;">
<div class="container">
    <div class="panel">
        <div class="panel">

            <div class="panel" style=" margin:0%; ">
                <div class="caption">

                </div><!--caption-->



                <fieldset>

                    <form role="form" class="form-horizontal" action="emp_update.php" method="POST" name="contactform"  style="padding: 2%;">


                <legend><center> <h3><?php echo   $_SESSION['email']; ?></h3> <span class="glyphicon glyphicon-edit"></span></center> </legend>

                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Job Title</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">

                    <div class="col-md-6">
                        <input class="form-control" name="txt_job_title" placeholder="Job Title" type="text" id="inputName" required=""  />


                    </div><!--col-md--12-->
                </div><!--form-group-->


                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Enter CompanyName</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->


              <div class="form-group">

                    <div class="col-md-6">
                        <input class="form-control" name="txt_companyname" placeholder="companyname" type="text" id="inputName" required=""  />


                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="">
                
              <div class="form-group">

                <div class="col-md-10">

            <div class="hero-unit">
               <hr/>
           </div><!--hero-unit-->

                 </div><!--col-md-12-->

                </div><!--form-group-->
                </div><!--panel-->
                  <div class="form-group">
                  <div class="col-md-10">

        <div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title"><h2 style="text-align:center;">Job description & requirements</h2>
          </div>

          <div class="panel-options">
            <a href="postjobs.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>

          </div>
        </div>
          <div class="panel-body">
            <textarea id="tinymce_full" name="txt_area"></textarea>
          </div>
        </div>
        </div>
        </div>





      

               <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Choose Job Category</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

              <div class="form-group">

                    <div class="col-md-6">


                        <select class="form-control" name="txt_nationality"   required="">

                              <option>IT</option>
              <option>Accounting</option>
              <option>Top Management</option>
              <option>Creatives</option>
              <option>Customer Service</option>
              <option>Education</option>
              <option>Farming & Agriculture</option>
              <option>Government</option>
              <option>Healthcare & Pharmaceuticals</option>
              <option>Human Resources & Recruitment</option>
              <option>Insurance</option>
              <option>Legal</option>
              <option>Manufacturing & Production</option>
              <option>Minning & Natural Resources</option>
              <option>NGO, Communication</option>
              <option>Administration & office Support</option>
              <option>Project/ Project Management</option>
              <option>Research, Quality control/ Quality Assurance</option>
              <option>Marketing</option>
              <option>Sales/Business Development</option>
              <option>Security</option>
              <option>Strategy & Consulting</option>
              <option>Tourism & Travel</option>
              <option>Trade & Services</option>
              <option>Transport,Logistics,Procurement</option>
              <option>Real Estate</option>
              <option>Hospitality</option>
              <option>Others</option>

                              </select>


                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Choose Job-Experience</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

              <div class="form-group">

                    <div class="col-md-6">


                        <select class="form-control" name="txt_experience"  required="">

                              <option>5</option>
                              <option>4</option>
                              <option>3</option>
                              <option>2</option>
                              <option>1</option>

                              </select>


                    </div><!--col-md--12-->
                </div><!--form-group-->


                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Company-Website<span class="badge">If any</span></center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">

                    <div class="col-md-8">

                        <input class="form-control" name="txt_website" placeholder="url eg. www.example.com" type="text" id="inputName"  />


                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">

                    <div class="col-md-10">


                    </div><!--col-md-10-->
                </div><!--form-group-->

                <div class="form-group">
                    <div class="col-md-10">

                         <input class="btn btn-lg btn-success btn-block" type="submit" value="POST JOB" name="profile" style="font-size:1.25em; margin-top:8%;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->




                </div><!--col-md-12-->

            </form>

                </fieldset>



            </div><!--thumbnail-->
        </div><!--panel-->
    </div><!--jumbotron-->
    </div><!--container-->
</div><!--row-->
</section>
<section class="post_jobs">
  <div class="jumbotron">

    <div id="posts">
      <div clas="col-md-10">
<center><p style="font-size:2em;" class="text-danger">LIST OF JOBS POSTED</p></center>
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table  table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="success">
         <th>Job Title</th>
         <th>Company Name</th>
         <th> Job Description </th>
         <th>Job Category </th>
         <th>Years of Experience </th>
         <th>Job Post Date  &nbsp; [Year/Month/Day/HH/MM/SS]</th>




      </thead>
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
        //$post_date = $row[5];
        $post_date = $row['Job Post Date'];






       ?>

       <tr class="info">
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $job_title; ?></td>
         <td><?php echo $company_name; ?></td>
         <td><?php echo $job_category; ?></td>
         <td><?php echo $experience; ?></td>
         <td><?php echo $post_date; ?></td>
               </tr>
       <?php } ?>
    </table>
  </div>

    </div><!--post-->

  </div><!--panel-->
</section>

<div id="contacts" class="wow bounceInLeft" data-wow-offset="200">
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



  <div id="footer">
  <div class="container">
    <h4 style="color:#fff;"><center>Copyright ©2016 Mkonnect.</center></h4>
  </div>
</div>

<ul class="nav pull-right scroll-top pull-right">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>


    <script src="js/wow.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/wow.js"></script>

<script src="js/wysihtml5-0.3.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-wysihtml5.js"></script>

<script>
    $('.textarea').wysihtml5();
</script>


<!--navbar-->
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

<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/editors.js"></script>

</body>
</html>
