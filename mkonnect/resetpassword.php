<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-popover-x.css" media="all" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <!--<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>-->
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
<body>

<fieldset>
  <form role="form" class="form-horizontal" action="resetpassword.php" method="POST" name="contactform" data-toggle="validator">
  <div id="login">
  <div class="col-md-6 col-md-offset-3 panel">
   <legend><center> <i class="fa fa-registered" aria-hidden="true" fa-5x aria-hidden="true"></i>Reset Password</center> </legend>
    
            
            <div class="form-group">
                <div class="col-md-12">
            <input class="form-control" name="password" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required />
              <div class="help-block">Minimum of 6 characters</div>
            </div><!--col-md-6-->
            </div><!--form-group-->

            <div class="form-group">
                <div class="col-md-12">
            <input class="form-control" name="confirm_password" placeholder="confirm Password" type="password" data-minlength="6" id="inputPassword" value="" required />
              <div class="help-block">Minimum of 6 characters</div>
            </div><!--col-md-6-->
            </div><!--form-group-->

            
            <div class="form-group">
                    <div class="col-md-12">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Reset Password" name="login" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->
            </div><!--col-md-6-->
            </div><!--login-->
  </form>
</fieldset>

</body>
</html>

