<?php   require ("db.php");
session_destroy();
 ?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mkonnect</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css"> 
    <link rel="stylesheet" type="text/css" href="css/materialize-min.css"> 
    <link rel="stylesheet" type="text/css" href="css/stylemkonect.css"> 
    <link rel="stylesheet" type="text/css" href="js/carousel.js">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/mkonnect.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
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
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtyA7xwFNVFltXxYYlyuiFzYtbshZcECIZThteLMuNgQvgEVAt"); height: auto;
  width: 100%; padding: 40px 0; overflow: hidden;
}

.jobbs {
  background-image: url("https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTwpFj66a4NwG0kr9hDqkNBJFbTF3ISpIPKe-Mvr8w4KEy3AYqV");
  width: 100%;
  height: auto;
  width: auto;
  padding: 40px 0;
  overflow: hidden;
}
.thumbnail{
 
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
body{
  padding: 30px;
  background-image: url(data:image/png;base64,...==);} 
a{ 
  color:#000;
}
ul{ 
  list-style-type: none;
  margin-top: -20px;
}
.box{ 
  position: relative;
  z-index: 1;
  width: 456px;
  height: 380px; 
  margin:50px auto 0;
  text-align: center;
  color:#fff;
  text-shadow:0 1px 0 #333; 
  background:
    -webkit-radial-gradient(0 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -webkit-radial-gradient(100% 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -webkit-radial-gradient(100% 0, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -webkit-radial-gradient(0 0, circle, rgba(204,0,0,0) 29px, #d05353 29px);
  background:
    -moz-radial-gradient(0 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -moz-radial-gradient(100% 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -moz-radial-gradient(100% 0, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -moz-radial-gradient(0 0, circle, rgba(204,0,0,0) 29px, #d05353 29px);
  background:
    -o-radial-gradient(0 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -o-radial-gradient(100% 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -o-radial-gradient(100% 0, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -o-radial-gradient(0 0, circle, rgba(204,0,0,0) 29px, #d05353 29px);  
  background:
    -ms-radial-gradient(0 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -ms-radial-gradient(100% 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -ms-radial-gradient(100% 0, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    -ms-radial-gradient(0 0, circle, rgba(204,0,0,0) 29px, #d05353 29px); 
  background:
    radial-gradient(0 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    radial-gradient(100% 100%, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    radial-gradient(100% 0, circle, rgba(204,0,0,0) 29px, #d05353 29px),
    radial-gradient(0 0, circle, rgba(204,0,0,0) 29px, #d05353 29px); 
  background-position: bottom left, bottom right, top right, top left;
  background-size: 50% 50%;
  background-repeat: no-repeat;
}
.tag{ 
  position: relative; 
  top: -5px; 
  left: 50%; 
  margin-left: -92px; 
  width: 184px; 
  height: 87px;
  color:#fff; 
  font-size: 36px; 
  font-weight: bold; 
  line-height: 87px; 
  text-shadow:0 -1px 0 rgba(0,0,0,.2);
  background-color: #b5ae63;
  background-size: 2px 2px;
  background-image: -webkit-linear-gradient(45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a), 
    -webkit-linear-gradient(-45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a);
  background-image: -moz-linear-gradient(45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a), 
    -moz-linear-gradient(-45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a);
  background-image: -o-linear-gradient(45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a), 
    -o-linear-gradient(-45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a);
  background-image: -ms-linear-gradient(45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a), 
    -ms-linear-gradient(-45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a);
  background-image: linear-gradient(45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a), 
   linear-gradient(-45deg, #c0b96a 25%, transparent 25%, transparent 75%, #c0b96a 75%, #c0b96a);    
}
.tag:after,
.tag:before{
  position:absolute;
  left:0; 
  content: ""; 
  width: 100%; 
  z-index: 8
}
.tag:after{
  height: 30px; 
  top: 0px; 
  background: -webkit-linear-gradient(top,rgba(226,217,124,0) 0%,rgba(226,217,124,1) 40%,rgba(226,217,124,1) 60%,rgba(226,217,124,0) 100%);
  background: -moz-linear-gradient(top,rgba(226,217,124,0) 0%,rgba(226,217,124,1) 40%,rgba(226,217,124,1) 60%,rgba(226,217,124,0) 100%);
  background: -o-linear-gradient(top,rgba(226,217,124,0) 0%,rgba(226,217,124,1) 40%,rgba(226,217,124,1) 60%,rgba(226,217,124,0) 100%);
  background: -ms-linear-gradient(top,rgba(226,217,124,0) 0%,rgba(226,217,124,1) 40%,rgba(226,217,124,1) 60%,rgba(226,217,124,0) 100%);
  background: linear-gradient(top,rgba(226,217,124,0) 0%,rgba(226,217,124,1) 40%,rgba(226,217,124,1) 60%,rgba(226,217,124,0) 100%);
}
.tag:before{ 
  height:8px; 
  bottom: -5px; 
  z-index: -1;  
  background: -webkit-radial-gradient(ellipse closest-side, #b8b165, #b8b165 0%, #b8b165 70%,#732e2e 99%, transparent);
  background: -moz-radial-gradient(ellipse closest-side, #b8b165, #b8b165 0%, #b8b165 70%,#732e2e 99%, transparent);
  background: -o-radial-gradient(ellipse closest-side, #b8b165, #b8b165 0%, #b8b165 70%,#732e2e 99%, transparent);
  background: -ms-radial-gradient(ellipse closest-side, #b8b165, #b8b165 0%, #b8b165 70%,#732e2e 99%, transparent);
  background: radial-gradient(ellipse closest-side, #b8b165, #b8b165 0%, #b8b165 70%,#732e2e 99%, transparent);
  background-size:8px 8px;
}
form div:nth-of-type(3):before,
form div:nth-of-type(5):before{ 
  content: ""; 
  display: block;    
  width: 100%; 
  height: 5px;
  border:1px solid #c9938a;
  border-color:#c9938a transparent;
}
form{ 
  margin: 0 20px;
  line-height: 30px;
}
form input:not([type="checkbox"]){ 
  background: #aa3e3e; 
  box-shadow:inset 0 0 5px rgba(0,0,0,.5),0 1px 1px #da6262; 
  border: none; 
  height: 30px; 
  width: 100%; 
  padding-left: 5px; 
  padding-right: -5px; 
  margin:20px 0;
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
}
form input:not([type="checkbox"]):focus{
  outline: 0 none;
  box-shadow: inset 0 1px 3px rgba(255,255,255,0.1), 0 0 8px rgba(255,255,255, 0.6);
}
::-webkit-input-placeholder {
  color:#d6aaaa;
  font-weight: bold;
}
form .btn{ 
  position: relative;
  top: 0; 
  border: none; 
  width: 112px; 
  height: 44px; 
  font-weight: bold;
  color: #b74242;
  text-shadow:0 -1px 0 #000; 
  border-radius: 3px; 
  box-shadow: 0 -1px 0 #feeae7,0 1px 0 #976159; 
  background: -webkit-linear-gradient(top,#f8d3cf,#dfafa8); 
  background: -moz-linear-gradient(top,#f8d3cf,#dfafa8); 
  background: -o-linear-gradient(top,#f8d3cf,#dfafa8); 
  background: -ms-linear-gradient(top,#f8d3cf,#dfafa8); 
  background: linear-gradient(top,#f8d3cf,#dfafa8); 
  margin-top: 20px;
  -webkit-transition: all 0.25s ease-out 0.05s;
  -moz-transition: all 0.25s ease-out 0.05s;
  -o-transition: all 0.25s ease-out 0.05s;
  -ms-transition: all 0.25s ease-out 0.05s;
  transition: all 0.25s ease-out 0.05s;
}
form .btn:hover{
  top: 1px;
  box-shadow: 0 -1px 0 #feeae7,0 2px 0 #976159; 
  background: -webkit-linear-gradient(top,#dfafa9,#e1b2ac);   
  background: -moz-linear-gradient(top,#dfafa9,#e1b2ac);  
  background: -o-linear-gradient(top,#dfafa9,#e1b2ac);  
  background: -ms-linear-gradient(top,#dfafa9,#e1b2ac);   
  background: linear-gradient(top,#dfafa9,#e1b2ac);   
}


  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</style>



  </head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70" class="">
    <nav>
    <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="img/icons/imageedit_4_7060829937.png" style="width: 200px;"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
      <li><strong><a href="mkonnectn1.php">Home &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      <li><strong><a href="postjob.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>
      
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><strong><a href="construction.php">Short Code &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="aboutus.php">About Us &nbsp &nbsp &nbsp &nbsp </a></strong></li>
        <li><strong><a href="mkonnectn1.php">Home &nbsp &nbsp &nbsp &nbsp</a></strong></li>
        <li><strong><a href="postjob.php">Post A Job &nbsp &nbsp &nbsp &nbsp</a></strong></li>  
      </ul>
    </div>

  </nav>

   <div class="box" style="">
  <form action="login.php" method="post" name="login">
    <div class="tag">SIGN IN</div>
    <div>Log in to your account or sign up to create one.</div>
    <div>
      <input name="email" id = "email"  placeholder="Your Email" type="email" required="">
    </div>
    <div>
      <input name="password" id = "Password"  placeholder="Your Password" type="password" required="">
    </div>
    <div>
      <button type="submit" class="btn" value="submit">SUBMIT</button>
    </div>
    <div>
      <a href="mkonnectn1.php#post_jobs">Are You An Employer.? Sign Up Here.</a>
    </div>
    <div>
    <center><a data-toggle="collapse" href="#reg" aria-expanded="false" aria-controls="collapseExample"> <button class="btn btn-warning" style="margin-left: -5px; width: 400px;">Register if you dont have an account</button></a></center><br><br>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  <div class="thumnail"></div>
<div id="reg" class="collapse" >
<div class="row " style="margin-top: 0%;">
<div class="container">
<div class="well">
<div class="thumbnail">
        
        <legend><h1 style="text-align: center;"><i class="fa fa-registered" aria-hidden="true" fa-5x aria-hidden="true"></i></h1></legend>
         <form class="form-vertical" action="register33.php" method="POST" id="">
                 <div class="form-group">
            <div class="col-md-12">
               <label for="txt_email" class="control-label">
               <h3 class="text-muted">Email</h3></label>
            </div><!--col-md-12-->
          </div><!--form-group-->

                  <div class="form-group">
                 <div class="col-md-12">

                   <input class="form-control" name="email" placeholder="Your Email" id="email" type="email" autofocus="" required="">


                    </div><!--col-md-12-->
                    </div><!--form-group-->

                        <div class="form-group">
            <div class="col-md-12">
               <label for="txt_pass" class="control-label"><h3 class="text-muted">Password</h3></label>
            </div><!--col-md-12-->
          </div><!--form-group-->

              <div class="form-group">
              <div class="col-md-10">

              <input class="form-control" name="password" placeholder="Your Password" type="password" id="password" required="">
              </div><!--col-md-12-->
               </div><!--form-group-->
               <div class="form-group">
            <div class="col-md-10">
               <label for="txt_subject" class="control-label text-warning">Confirm Password</label>
            </div><!--col-md-12-->
          </div><!--form-group-->

          <div class="form-group has-error has-danger">

                <div class="col-md-12">

                    <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password" id="confirm_password" required="">

                </div><!--col-md-12-->
            </div><!--form-group-->



                </div>
                
                <div class="form-group">
                <div class="col-md-8">

         <input class="btn btn-lg btn-success btn-block " type="submit" value="Register" name="accounts"   style="font-size:1.25em;margin-left: 150px;margin-top: -20px;">

                </div><!--col-md-12-->
            </div><!--form-group-->

                </form>
        </div><!--panel-->
        </div><!--well-->
</div><!--reg-->
</div><!--container-->
</div><!--row-->
</div><!--reg-->


<footer class="page-footer" style="background-color: rgb(8,8,8);margin-top: 50px;">
<div class="row">
<div class="col m3">
  <p style="font-size: 20px;">Our Mission & Vission</p>
  <p>At mkonnect we link the employer and the job seeker.
  Profile matching employer and job seekers according to
  employers requirements and the job seekers qualification.</p>
</div><!--end of col md4-->
<div class="col m3">
  <p style="font-size: 20px;">Connect With Us on:</p>
  <p><img src="img/icons/soc_fb.png" style="width: 15px;height: 15px;">&nbsp &nbsp facebook</p>
  <p><img src="img/icons/soc_gplus.png" style="width: 15px;height: 15px;">&nbsp &nbsp google +</p>
  <p><img src="img/icons/soc_tw.png" style="width: 15px;height: 15px;">&nbsp &nbsp twitter</p>
  <p><img src="img/icons/soc_in.jpg" style="width: 15px;height: 15px;">&nbsp &nbsp linkedIn</p>
</div>
<div class="col m3">
  <p style="font-size: 25px;">Important links</p>
  <p><a href="#2">Terms and Conditions</a></p>
  <p><a href="#2">Privacy Policy</a></p>
  <p><a href="#2">FAQs.</a></p>
</div>
<div class="col m3">
  <p style="font-size: 25px;">Contact Info:</p>
  <p><img src="img/icons/address.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp Bemuda plaza,Ngong Rd,Block A | 4th Floor,Left Wing | P.O.Box uxt-00100,Nairobi.</p>
  <p><img src="img/icons/cont.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp Phone:0000100024550</p>
  <p><img src="img/icons/email.jpg" style="width: 20px;height: 20px;"> &nbsp &nbsp info@mkonnect.co.ke</p>
</div>
</div><!--end of class row-->          
<div class="row">
<div class="col m12">
<p class="white-text">Copyright  &copy<?php
    require_once 'footertitle.php'
    ?>Mkonnect&reg.<br>All Rights Reserved</p>
</div>
</div>
</footer><!--end of footer here-->

<!--ul class="nav pull-right scroll-top pull-right">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul-->

<!--/col-->
<!--/container-->

<!--/wrap-->

<!--ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul-->

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

</body>
</html>
