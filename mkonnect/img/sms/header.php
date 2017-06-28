<img id="bg_img_specific" src="images/bg_city.jpg" class=""  style ="max-height:100%"/>
<div class="bg_body">
	<section id="content" class="wrapper-md">		
		<section class="hbox stretch">
			<!-- .aside -->
			<aside class="aside aside-md">
				<section class="vbox">
					<header class="header rasterize">
						<p class="h4"><a href="http://sms.uxt.co.ke/"><img src="images/logo.png" class="logo logo-front"/></a></p>
					</header>
				</section>
			</aside>
			<header class="header rasterize navbar navbar-inverse">
				<div class="collapse navbar-collapse pull-in" >
					<ul class="nav navbar-nav navbar-right">
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
					</ul>
				</div>
			</header>        
		</section> 
		<div class="row m-n">
			<?php if($page != 'home') { ?>
			<div class="col-md-9">
				<section>
					<h1 class="text-white hidden-xs">
						<?php echo $pagetitle; ?>
					</h1>
					<h2 class="text-white hidden-lg">
						<?php echo $pagetitle; ?>
					</h2>
					<br/>
				</section>
			</div>
			<?php } ?>