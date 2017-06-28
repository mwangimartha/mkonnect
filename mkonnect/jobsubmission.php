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
              .thumbnail{
   height: auto;
  width: 100%;
  
  overflow: hidden;
  background-color: ;

}
body{
  font-size: 1.2em;
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
          <li class="active"><a href="mkonnect.php">ShortCode</a></li>
          <li class="active"><a href="#contacts">Contact</a></li>
          <li class="active"><a href="#contacts">LogOut</a></li>

      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<div class="divider" id="section2" style="margin-top: 0%;"></div><!--divider-->
<div class="col-md-6">
<div class="well" style="margin-left:;">
  <h2>Email session Variable</h2>
</div><!--well-->
</div><!--col-md-6-->



<div class="row wow  slideInLeft" style="margin-top: 2%;">
<div class="container">
    <div class="panel">
        <div class="">
            <form  role="form" class="form-horizontal" action="emp_update.php" method="POST" name="contactform"  style="padding: 2%;">
            <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-md-12">
                <label for="txt_subject" class="control-label"><center><h2 style="text-align: center;">Job Title</h2></center></label>
                </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-7">
                 <input class="form-control" name="txt_jobtitle" placeholder="Job Title" type="text" id="inputName" required=""  />
                </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                
                <label for="txt_subject" class="control-label"><center><h2 style="text-align: center;">Company Name</h2></center></label>
                
                </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-7">
                 <input class="form-control" name="txt_companyname" placeholder="companyName" type="text" id="inputName" required=""  />
                </div><!--col-md-12-->
                </div><!--form-group-->
                </div><!--col-md-4-->



                <div class="form-group">
                <div class="col-md-12">
                  <div class="hero-unit" >
                  <label for="txt_subject" class="control-label"><h2 style="text-align: center;">Job Description</h2></center></label>
                  <hr/>
                <textarea class="textarea" placeholder="Enter Job Description" style="width: 810px; height: 200px" required=""></textarea>
                </div><!--her-unit-->
                </div><!--col-md-12-->
               </div><!--form-group-->

        <div class="col-md-4">
        <div class="form-group">
         <div class="col-md-12">
            <label for="txt_subject" class="control-label"></center><h2> Choose Job Category</h2></center></label>
         </div><!--col-md-12-->
         </div><!--col-md-12-->
               
               <div class="form-group">
         <div class="col-md-8">
            <select class="form-control" name="txt_jobcategory">
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
         </div><!--col-md-12-->
         </div><!--col-md-12-->
         </div><!--col-md-3-->
         <div class="col-md-4">
         <div class="form-group">
                <div class="col-md-12">
                <label for="txt_subject" class="control-label"><center><h2 style="text-align: center;">Website</h2></center></label>
                </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-7">
                 <input class="form-control" name="txt_website" placeholder=" eg. www.company.com" type="text" id="inputName" required=""  />
                </div><!--col-md-12-->
                </div><!--form-group-->
                </div><!--col-md-4-->

                <div class="col-md-12">
                <label for="txt_subject" class="control-label"><center><h2 style="text-align: center;">WorkExperience</h2></center></label>
                </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                 <select class="form-group" name="txt_experience">
                   <option>5</option>
                   <option>4</option>
                   <option>3</option>
                   <option>2</option>
                   <option>1</option>
                   <option>none</option>
                 </select>
                </div><!--col-md-12-->
                </div><!--form-group-->
                </div><!--col-md-4-->

         <div class="form-group">
         <div class="col-md-8">
          <center>  <button class="btn btn-success btn-block" style="margin-top:2%;"><h3>SUBMIT</h3></button></center>
         </div><!--col-md-12-->
         </div><!--col-md-12-->
         </div><!--col-md-12-->
         </div><!--row-->

            </form>
            </div><!--thumbnail-->
        </div><!--panel-->
    </div><!--jumbotron-->
    </div><!--container-->
</div><!--row-->

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
<script src="js/fa.js"></script>
<!-- optionally if you need translation for your language then include
    locale file as mentioned below -->
<script src="js/<lang>.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/wysihtml5-0.3.0.js"></script>
    <script src="js/wysihtml5-0.3.0.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/prettify.js"></script>

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
