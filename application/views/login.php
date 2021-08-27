<!DOCTYPE html>
<html>
<!-- Mirrored from phantom-themes.com/modern/Source/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 13:57:00 GMT -->

<head>
    <!-- Title -->
    <title>Modern | Login - Sign in</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="/assets/admin/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
    <link href="/assets/admin/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" />
    <link href="/assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="/assets/admin/css/modern.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
    <script src="/assets/admin/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="/assets/admin/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Include Handlebars from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
</head>

<body class="page-login">
<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        <a href="index.html" class="logo-name text-lg text-center">BackOffice Access</a>
                        <p class="text-center m-t-md" id="login-msg">
                            <script id="loginmsg" type="text/x-handlebars-template">{{displaymsg}}</script>
                        </p>
                        <form id="login-form" class="m-t-md" action="/backoffice/verify_login" onsubmit="return false;" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                        <p class="text-center m-t-xs text-sm">2021 &copy; Osborne Mordred.</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->
<!-- Javascripts -->

<script src="/assets/admin/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="/assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/assets/admin/plugins/pace-master/pace.min.js"></script>
<script src="/assets/admin/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="/assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/assets/admin/plugins/switchery/switchery.min.js"></script>
<script src="/assets/admin/plugins/uniform/jquery.uniform.min.js"></script>
<script src="/assets/admin/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="/assets/admin/plugins/waves/waves.min.js"></script>
<script src="/assets/admin/js/modern.min.js"></script>
<script src="/assets/admin/templatecodes/login_processor.js"></script>
</body>

</html>