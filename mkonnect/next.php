<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
       <link rel="icon" type="image/png" href="img/favicon.ico" sizes="32x32" />
</head>
<body>
<div id="success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="https://s-media-cache-ak0.pinimg.com/736x/bb/1a/6a/bb1a6aaba320bacb96cbdf94d1eb6687.jpg"
      <div class="caption">
      <center><p class="text-danger" style="font-size:2em;">
      Please Upload your C.V.
      </center>


     <center><a href="uploadcv.php"><button class="btn btn-danger btn-lg">Back</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>

</div>


</body>
</html>


<?php
if ( isset($_SESSION['next']) &&  $_SESSION['next'] != true) {

  echo "<script>$('#success').modal('show');</script>";

}
elseif (isset($_SESSION['next']) &&  $_SESSION['next'] == true) {
echo "<script>window.open('profile.php','_self')</script>";
}
 ?>
