<div class="bg_body">
<section class="hbox stretch">
	<section id="content">		
		<section class="hbox stretch">
			<!-- .aside -->
			<aside class="aside aside-md bg-dark">
					<section class="vbox">
						<header class="dk header bg-black">
							<button class="btn btn-icon btn-default btn-sm pull-right visible-xs m-r-xs" data-toggle="class:show" data-target="#mail-nav"><i class="fa fa-bars"></i></button>
							<p class="h4"><a href="http://sms.uxt.co.ke/"><img src="images/logo.png" class="logo logo-front"/></a></p>
						</header>
						<?php include 'sidebar_dev.php'; ?>
					</section>
			</aside>
			<aside class="bg-light lter">
				<section class="vbox">
					<header class="dk header bg-black navbar navbar-inverse">
						<div class="collapse navbar-collapse pull-in" >
							<ul class="nav navbar-nav navbar-right">
								<?php include 'db.php'; if (!$_SESSION['auth']) { ?>
								<li>
									<a href="index.php"><span class="text-white">Login</span></a>                    
								</li>
								<li>
									<a href="pricing.php"><span class="text-white">Pricing</span></a>                    
								</li>					
								<li>
									<a href="developerapi.php"><span class="text-white">Developer API</span></a>                    
								</li>
								<li>
									<a href="contactus.php"><span class="text-white">Contact Us</span></a>                    
								</li>
								<?php } else { ?>
								<li>
									<a href="dashboard.php">User Dashboard</a>                    
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<span class="pull-left m-l-xs m-r-xs"><i class="fa fa-cogs"></i></span>
										 Settings &nbsp;
									</a>
									<ul class="dropdown-menu animated fadeInLeft">
										<li>
											<a href="sys_apikey.php">
												<i class="fa fa-fw fa-code"></i> API Key
											</a>
										</li>
										<li>
											<a href="sys_smscallback.php">
												<i class="fa fa-fw fa-external-link"></i> SMS Callback
											</a>
										</li>
										<li>
											<a href="sys_subcallback.php">
												<i class="fa fa-fw fa-external-link"></i> Subscription Callback
											</a>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<?php echo $_SESSION['name']; ?> &nbsp;<b class="caret"></b>
									</a>
									<ul class="dropdown-menu animated fadeInLeft">
										<li><a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a></li>
										<li class="divider"></li>
										<li><a href="password.php"><i class="fa fa-fw fa-lock"></i> Password</a></li>
										<li class="divider"></li>
										<li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
									</ul>
								</li>
								<?php } ?>
							</ul>
						</div>
					</header>
					<section class="scrollable" id="pjax-container">
		
		