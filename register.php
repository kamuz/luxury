<?php include 'partials/header.php'; ?>
<div class="register">
	<div class="container">
		<div class="register-top heading">
			<h2>REGISTER</h2>
		</div>
		<div class="register-main row">
			<div class="col-md-6 account-left">
				<input placeholder="First name" type="text" tabindex="1" required>
				<input placeholder="Last name" type="text" tabindex="2" required>
				<input placeholder="Email address" type="text" tabindex="3" required>
				<input placeholder="Mobile" type="text" tabindex="3" required>
				<ul>
					<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Male</label></li>
					<li><label class="radio"><input type="radio" name="radio"><i></i>Female</label></li>
					<div class="clearfix"></div>
				</ul>
				<div class="address submit">
					<input type="submit" value="Submit">
				</div>
			</div>
			<div class="col-md-6 account-left">
				<input placeholder="Password" type="password" tabindex="4" required>
				<input placeholder="Retype password" type="password" tabindex="4" required>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php include 'partials/footer.php'; ?>