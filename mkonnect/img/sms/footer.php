		</div>
		<footer id="footer animated fadeInUp">
			<div class="text-center text-white">
				<p class="text-sm">
					&copy; <?php echo date('Y'); ?> <a href="http://uxt.co.ke" class="text-white" target="_blank" >User Experience Technologies</a> &bull; <a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white" >Terms of Use</a>
				</p>
			</div>
		</footer>	
	</section>
</div>
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- app -->
<script src="js/app.js"></script>
<script src="js/app.plugin.js"></script>
<script src="js/app.data.js"></script>
<?php if($page == 'home' || $page = 'pricing') { ?>
<script src="js/telephone.js"></script>

<script>
	 var input = $("#mobile_number");

	 input.intlTelInput({
	  defaultCountry: "auto",
	  nationalMode: false,
	  utilsScript: "js/utils.js",
	  preferredCountries: ["ke", "ug", "tz", "rw"],
	});

	input.on("keyup change", function() {
	  var intlNumber = input.intlTelInput("getNumber");
	  $("#phone_number").val(intlNumber.replace('+', ''));
	});

</script>
<?php } ?>
<!-- fullscreenr -->
<script src="js/jquery.fullscreenr.js"></script>
<script type="text/javascript">  
	var FullscreenrOptions = {  width: 1280, height: 1024, bgID: '#bg_img_specific' };
	jQuery.fn.fullscreenr(FullscreenrOptions);
</script>
</body>
</html>