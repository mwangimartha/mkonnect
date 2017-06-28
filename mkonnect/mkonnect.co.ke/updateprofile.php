<?php
 require ("db.php");
      if ($_SESSION['auth'] != true) {
        header("Location: mkonnect.php");
      }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PROFILE</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">

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

<!-- optionally if you need a theme like font awesome theme you can include
    it as mentioned below -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/updateprofile.css">
          <style type="text/css">


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
          <li class="active"><a href="mkonnect.php">ShortCode</a></li>
          <li class="active"><a href="#contacts">Contact</a></li>
          <li class="active"><a href="logout.php">LogOut</a></li>

      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<div class="divider" id="section2" style="margin-top: 0%;"></div><!--divider-->

<section class="konnect wow pulse"  data-wow-iteration="infinite" data-wow-duration="4800ms">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h1 style="padding:20px;background-color:rgba(5,5,5,.8)"> Please Update your Profile Below <span class=" glyphicon glyphicon-hand-down"></span></h1> </div>
</section>



<div class="row wow  slideInLeft" style="margin-top: 8%;">
<div class="container">
    <div class="panel">
        <div class="panel">
            <h3 class="text-danger"><center>Update Your Profile the Click Next to Upload your C.V.</center></h3>
            <div class="well" style=" margin:0%; ">
                <div class="caption">

                </div><!--caption-->



                <fieldset>

                    <form role="form" class="form-horizontal" action="update.php" method="POST" name="contactform"  style="padding: 2%;">


                <legend><center> <h3><?php echo   $_SESSION['email'] ?></h3> <span class="glyphicon glyphicon-edit"></span></center> </legend>

                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Enter FullName</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">

                    <div class="col-md-10">
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" id="inputName" required=""  />


                    </div><!--col-md--12-->
                </div><!--form-group-->


                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Enter Phone Number</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->


              <div class="form-group">

                    <div class="col-md-10">
                        <input class="form-control" name="txt_education" placeholder="072...." type="text" id="inputName" required=""  />


                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Select Education Level</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

              <div class="form-group">

                    <div class="col-md-10">

                         <select class="form-control" name="txt_cert"  required="">

                              <option>Degree</option>
                              <option>Diploma</option>
                              <option>Certificate</option>
                              <option>KCSE</option>

                              </select>


                    </div><!--col-md-12-->
                </div><!--form-group-->

               <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Nationality</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

              <div class="form-group">

                    <div class="col-md-10">


                        <select class="form-control" name="txt_nationality"  required="">

                              <option>Kenyan</option>
                              <option>Ugandan</option>
                              <option>East African</option>

                              </select>


                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label"><h3 class="text-warning"><center>Years Of Experience</center></h3></label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">

                    <div class="col-md-10">

                        
                         <select class="form-control" name="txt_years"  required="">

                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>

                              </select>



                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">

                    <div class="col-md-10">


                    </div><!--col-md-10-->
                </div><!--form-group-->

                <div class="form-group">
                    <div class="col-md-10">

                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Next" name="profile" style="font-size:1.25em;" >

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




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
<script src="js/fa.js"></script>
<!-- optionally if you need translation for your language then include
    locale file as mentioned below -->
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


</body>
</html>
