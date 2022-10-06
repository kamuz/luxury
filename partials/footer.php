	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" placeholder="Enter Your Email">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">
					<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/simplecart.js"> </script>
	<script src="assets/js/memenu.js"></script>
	<script src="assets/js/easydropdown.js"></script>
	<script>
		$(document).ready(function() {
			$(".memenu").memenu();
			$('.close1').on('click', function(){
				$('.cart-header').fadeOut('slow', function(){
					$('.cart-header').remove();
				});
			});
			$('.close2').on('click', function(){
				$('.cart-header1').fadeOut('slow', function(){
					$('.cart-header1').remove();
				});
			});
			$('.close3').on('click', function(){
				$('.cart-header2').fadeOut('slow', function(){
					$('.cart-header2').remove();
				});
			});
		});
	</script>
</body>
</html>