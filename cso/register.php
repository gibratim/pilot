<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta charset="utf-8"/>
<title>SafePal - Admin Dashboard - Register Service Provider</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"91375e26a3fff9b3ba9e8ea43f1e09fc",petok:"43a81c9ca444d987e62b5f08f74a7592518b0609-1472575446-1800",zone:"revox.io",rocket:"0",apps:{"ga_key":{"ua":"UA-56895490-1","ga_bs":"1"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d0489c402f5/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
<script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-56895490-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

/* ]]> */
</script>
</head>
<body class="fixed-header ">
<?php
require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		$role = stripslashes($role);
		$role = mysql_real_escape_string($role);
		
		
        $query = "INSERT into `safe_users` (username, password, email, role) VALUES ('$username', '".md5($password)."','$email','$role')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You have registered successfully.</h3><br/>Click here to <a href='login.php'>return</a></div>";
        }
    }else{
?>
<div class="register-container full-height sm-p-t-30">
<div class="container-sm-height full-height">
<div class="row row-sm-height">
<div class="col-sm-12 col-sm-height col-middle">
<img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
<h3>SafePal makes it easy for Service providers offer help to survivors</h3>
<p>
<small>
Create a SafePal CSO account. If you have a CSO account, log into it for this process. Sign in with <a href="#" class="text-info">SAFEPAL</a>
</small>
</p>
<form class="p-t-15" role="form" action="" method="post">
<div class="row">

</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>SAFEPAL User name</label>
<input type="text" name="username" placeholder="CSO registered Name (this cannot be changed later)" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Password</label>
<input type="password" name="password" placeholder="Minimum of 4 Charactors" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" name="email" placeholder="We will send loging details to you" class="form-control" required>
</div>
</div>
</div>
    
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Role</label>
<input type="text" name="role" placeholder="cso or admin " class="form-control" required>
</div>
</div>
</div>
    
<div class="row m-t-10">
<div class="col-md-6">
<p>I agree to the <a href="#" class="text-info small">Pages Terms</a> and <a href="#" class="text-info small">Privacy</a>.</p>
</div>
<div class="col-md-6 text-right">
<a href="#" class="text-info small">Help? Contact Support</a>
</div>
</div>
<button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
</form>
</div>
</div>
</div>
</div>
<div class=" full-width">
<div class="register-container m-b-10 clearfix">
<div class="inline pull-left">
<img src="assets/img/demo/pages_icon.png" alt="" class="m-t-5 " data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" width="60" height="60">
</div>
<div class="col-md-10 m-t-15">
<p class="hinted-text small inline ">No part of this website or any of its contents may be reproduced, copied, modified or adapted, without the prior written consent of the author, unless otherwise indicated for stand-alone materials.</p>
</div>
</div>
</div>
 
<div class="overlay hide" data-pages="search">
 
<div class="overlay-content has-results m-t-20">
 
<div class="container-fluid">
 
<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
 
 
<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>
 
</div>
    
</div>
 
</div>
 
 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
 
<script src="pages/js/pages.min.js"></script>
<script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
    <?php } ?>
</body>

</html>