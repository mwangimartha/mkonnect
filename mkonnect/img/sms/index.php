<?php 
$page = 'home';
$pagetitle = 'Home';
include 'head.php'; 
include 'header.php'; 
?>
			<div class="col-md-9 animated fadeInLeft">
				<section>
					<h1 class="text-white hidden-xs">
						UXT SMS Messaging
					</h1>
					<h2 class="text-white hidden-lg">
						SMS Messaging
					</h2>
					<h4 class="text-white hidden-xs">
						Compliant, reliable and scalable SMS infrastructure for business-critical transactional and marketing messages
					</h4>
					<h4 class="text-white hidden-lg">
						Compliant, reliable and scalable SMS infrastructure for business-critical transactional and marketing messages
					</h4>					
					<br/>
					<hr/>
				</section>
			</div>
			<div class="col-md-3 m-t-lg">
				<section class="panel animated fadeInDown">
					<form action="login.php" method="post" accept-charset="utf-8" class="panel-body">
					<div class="form-group ">
						<input type="text" name="login_username" value="" id="login_username" placeholder="Username" class="form-control"  /></div>
					<div class="form-group ">
						<input type="password" name="login_password" value="" id="login_password" placeholder="Password" class="form-control"  /></div>
					<div class="form-group">
						<button type="submit" class="btn btn-info bold">Sign in</button>
					</div>
					<div class="checkbox">
						<a href="forgot.php" class="pull-right text-info"><small>Forgot password?</small></a>
					</div>                        
					</form>				</section>
				<section class="panel animated fadeInUp">
					<header class="panel-heading text-center">
						<h5>New to UXT SMS? Sign Up</h5>
					</header>        
					<form action="register.php" method="post" accept-charset="utf-8" class="panel-body">
					<div class="form-group ">
						<input type="text" name="company" value="" id="company" placeholder="Your Company or Full Name" class="form-control"  /></div>
					<div class="form-group ">
						<input type="text" name="email" value="" id="email" placeholder="Email" class="form-control"  /></div>
					<div class="form-group ">
						<input type="text" name="mobile_number" value="" id="mobile_number" placeholder="Mobile Phone" class="form-control phone" style="width:276px"  /><input type="hidden" name="phone_number" value="" id="phone_number"  />					</div>
					<div class="form-group ">
						<input type="text" name="username" value="" id="username" placeholder="Login Username" class="form-control"  /></div>
					<div class="form-group ">
						<input type="password" name="password" value="" id="password" placeholder="Password" class="form-control"  /> 
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-warning btn-lg bold">Sign up for UXT SMS</button>
					</div>
					</form>				
				</section>
			</div>	
<?php include 'footer.php'; ?>