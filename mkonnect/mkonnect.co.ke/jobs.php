<?php
 require ("db.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Jobs</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <!-- Bootstrap -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css">
     <link rel="stylesheet" href="css/jobs.css">
          <style type="text/css">
        .available_jobs{
          background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtyA7xwFNVFltXxYYlyuiFzYtbshZcECIZThteLMuNgQvgEVAt"); height: auto;
          width: 100%; padding: 40px 0; overflow: hidden;
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
          <li class="active"><a href="jobs.php">Home</a></li>
          <li class="active"><a href="profile.php">Profile</a></li>
          <li class="active"><a href="profile.php#shortcode">ShortCode</a></li>
          <li class="active"><a href="#contacts">Contact</a></li>
          <li class="active"><a href="logout.php">LogOut</a></li>

      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<div class="divider" id="section2" style="margin-top: 0%;"></div><!--divider-->
<section class="available_jobs" style="margin-top:-6%;">
<div class="row wow  slideInLeft" style="margin-top: 3%;">
<div class="container">
    <div class="panel">
        <div class="panel">

         <h3 class="text-danger"> fill the form Below to Apply </h3>
            <div class="well" style=" margin-bottom:1%; ">

                <fieldset>



                  <div class="form-group">
                    <div class="col-md-10">

    <form id="cv" method="post" action="save_cv.php" enctype="multipart/form-data">
      <legend><center> <span class="glyphicon glyphicon-edit"></span></center> </legend>

      <label class="control-label" style="color:black;"><h3 class="text-warning">C.V.</h3></label>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #f0ad4e;">Valid Formats</span>&nbsp;&nbsp;<span class="badge" > "doc","docx","pdf"</span>
      <input id="input-6" type="file" name="files[]" multiple="multiple" style="color:#000;">
      <input type="submit" value="Upload your C.V." class="btn btn-warning" style="margin-top: 1%; font-size: 1.4em;">
    </form>
<?php
# error messages
if (isset($_SESSION['msg'])) {
  $e_msg=$_SESSION['msg'];
  foreach ($e_msg as $msg) {
    printf("<p class='text-danger'>%s</p></ br>\n", $msg);
  }
}
# success message
if(isset($_SESSION['count'])){
  printf("<p class='text-success'>%d C.V. Uploaded successfully !</p>\n", $_SESSION['count']);

}
  ?>
       </div><!--col-md-10-->
         </div><!--form-group-->


                    <form role="form" class="form-horizontal" action="biodata.php" method="POST" name="contactform"  style="padding: 2%;">
                    <div class="form-group">
           <div class="col-md-10">
           <label class="control-label text-muted" style="font-size:1.8em;">Option: Use your saved C.V.</label>
            </div>
            </div>
            <div class="form-group">
            <div class="col-md-10">
            <select name="cv_name" placeholder="Use your saved cv" class="form-control">
              <option>Select..</option>
              <option>echo cv name</option>

            </select>

         </div><!--col-md-10-->
         </div><!--form-group-->

         <div class="form-group">
           <div class="col-md-10">
             <div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title"><h2 style="text-align:center;" class="text-warning">Your Cover Letter</h2>
          </div>
          <div class="panel-body">
            <textarea id="tinymce_full" name="txt_area"></textarea>
          </div>

           </div>
         </div>
           <center> <button name="finish" class="btn btn-primary btn-block">POST</button></center>
            </form>

                </fieldset>



            </div><!--thumbnail-->
        </div><!--panel-->
    </div><!--jumbotron-->
    </div><!--container-->
</div><!--row-->
</section>
<section class="konnect wow pulse"  data-wow-iteration="infinite" data-wow-duration="4800ms">
  <!--div class="col-sm-6 col-sm-offset-3 text-center"><h1 style="padding:20px;background-color:rgba(5,5,5,.8)"> Please Update your Profile Below <span class=" glyphicon glyphicon-hand-down"></span></h1> </div-->
</section>

<div id="footer">
  <div class="container">
    <h4 style="color:#fff;"><center>Copyright ©2016 <a href="mkonnect.php">Mkonnect.</a></center></h4>
  </div>
</div>

<ul class="nav pull-right scroll-top pull-right">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<!--/col-->
<!--/container-->

<!--/wrap-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
<script src="js/fa.js"></script>

    <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/editors.js"></script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
       This must be loaded before fileinput.min.js -->
  <script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
  <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
       This must be loaded before fileinput.min.js -->
  <script src="js/plugins/sortable.min.js" type="text/javascript"></script>
  <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
       This must be loaded before fileinput.min.js -->
  <script src="js/plugins/purify.min.js" type="text/javascript"></script>
  <!-- the main fileinput plugin file -->
  <script src="js/fileinput.min.js"></script>
  <!-- bootstrap.js below is needed if you wish to zoom and view file content
       in a larger detailed modal dialog -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- optionally if you need a theme like font awesome theme you can include
      it as mentioned below -->
  <script src="themes/fa/theme.js"></script>
  <!-- optionally if you need translation for your language then include
      locale file as mentioned below -->
  <!-- <script src="js/locales/<lang>.js"></script> -->

<script src="js/<lang>.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/wow.js"></script>


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




<!--add-remove-experience-->
<script type="text/javascript">
          $(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();

        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });



});

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
  <!--upload-->
   <script>
    $(document).on('ready', function() {
        $("#input-6").fileinput({
            showUpload: false,
            maxFileCount: 4,
            mainClass: "input-group-lg"
        });
    });

  </script>
    <script>
    $(document).on('ready', function() {
        $("#trans").fileinput({
            showUpload: false,
            maxFileCount: 6,
            mainClass: "input-group-lg"
        });
    });

  </script>
</body>
</html>
