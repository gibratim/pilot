<!DOCTYPE html>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta charset="utf-8"/>
<title>Pages - Admin Dashboard UI Kit - Lock Screen</title>
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
<div class="login-wrapper ">
 
<div class="bg-pic">
 
<img src="assets/img/demo/safe" data-src="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
 
 
<div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
<h2 class="semi-bold text-white">
SafePal makes it easy for Service providers offer help to survivors</h2>
<p class="small">
images Displayed are solely for representation purposes only, All work copyright of respective
owner, otherwise © 2016 SAFEPAL.
</p>
</div>
 
</div>
 
 
<div class="login-container bg-white">
<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
<img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
<p class="p-t-35">Sign into your Safepal account</p>
 <?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  
<form id="form-login" class="p-t-15" role="form" method="POST" action="auth.php">
 
<div class="form-group form-group-default">
<label>Login</label>
<div class="controls">
<input type="text" name="username" placeholder="User Name" class="form-control" required>
</div>
</div>
 
 
<div class="form-group form-group-default">
<label>Password</label>
<div class="controls">
<input type="password" class="form-control" name="password" placeholder="Credentials" required>
</div>
</div>
 
<div class="row">
<div class="col-md-6 no-padding">
<div class="checkbox ">
<input type="checkbox" value="1" id="checkbox1">
<label for="checkbox1">Keep Me Signed in</label>
</div>
</div>
<div class="col-md-6 text-right">
<a href="#" class="text-info small">Help? Contact Support</a>
</div>
</div>
 
<button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
</form>
 
<div class="pull-bottom sm-pull-bottom">
<div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
<div class="col-sm-3 col-md-2 no-padding">
<img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
</div>
<div class="col-sm-9 no-padding m-t-10">
<p>
<small>
Create a SafePal Service Provider account. Contact Safe Pal to begin the
process. To Sign up contact <a href="#" class="text-info">providers@safepal.co</a> or call <a href="#" class="text-info">+2564</a>
</small>
</p>
</div>
</div>
</div>
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
      $('#form-login').validate()
    })
    </script>
</body>

</html>