<?php 
$page = 'pricing';
$pagetitle = 'Pricing';
include 'head.php'; 
include 'header.php'; 
?>
			<div class="col-md-9">
				<section>		
					<div class="panel">						
						<header class="panel-heading text-center">
							<h4>SMS</h4>
						</header> 
						<div class="table-responsive">      										
							<table class="table table-striped">					      				
								<thead>
									<tr>
										<th></th>
										<th colspan="4"><div align="center">Purchase</div></th>
									</tr>
									<tr>
										<th>Network</th>
										<th><div align="right">KES 1 - 99,999</div></th>
										<th><div align="right">KES 100,000 - 499,999</div></th>
										<th><div align="right">KES 500,000 - 999,999</div></th>
										<th><div align="right">KES 1,000,000+</div></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Safaricom</td>
										<td><div align="right">KES 1.00</div></td>
										<td><div align="right">KES 0.75</div></td>
										<td><div align="right">KES 0.55</div></td>
										<td><div align="right">KES 0.35</div></td>
									</tr>
									<tr>
										<td>Airtel</td>
										<td><div align="right">KES 1.00</div></td>
										<td><div align="right">KES 0.95</div></td>
										<td><div align="right">KES 0.75</div></td>
										<td><div align="right">KES 0.60</div></td>
									</tr>
									<tr>
										<td>Orange</td>
										<td><div align="right">KES 1.00</div></td>
										<td><div align="right">KES 0.90</div></td>
										<td><div align="right">KES 0.80</div></td>
										<td><div align="right">KES 0.65</div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="panel">						
						<header class="panel-heading text-center">
							<h4>Sender ID</h4>
						</header>
						<div class="table-responsive">        										
							<table class="table table-striped">					      				
								<tbody>
									<tr>
										<td><strong>Onetime registration</strong> (Branded across <strong>ALL</strong> networks)</td>
										<td><div align="right">KES 6,000.00</div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>				
			</div>
			<div class="col-md-3">
				<section class="panel">
					<header class="panel-heading text-center">
						<h5>Curious? <strong>10 FREE SMSs</strong> for you to try!</h5>
					</header>        
					<form action="register.php" method="post" accept-charset="utf-8" class="panel-body">
										
					<div class="form-group ">
						<input type="text" name="company" value="" id="company" placeholder="Your Company or Full Name" class="form-control"  />					</div>
					<div class="form-group ">
						<input type="text" name="email" value="" id="email" placeholder="Email" class="form-control"  />					</div>
					<div class="form-group ">
						<input type="text" name="mobile_number" value="" id="mobile_number" placeholder="Mobile Phone" class="form-control phone" style="width:276px"  /><input type="hidden" name="phone_number" value="" id="phone_number"  />					</div>
					<div class="form-group ">
						<input type="password" name="password" value="" id="password" placeholder="Password" class="form-control"  /> 
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-warning btn-lg bold">Sign up for UXT SMS</button>
					</div>
					</form>				</section>
			</div>			
<?php include 'footer.php'; ?>