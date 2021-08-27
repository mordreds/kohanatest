<!DOCTYPE html>
<html>

<head>
	<title><?=@$title?></title>

	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta charset="UTF-8">
	<meta name="description" content="Admin Dashboard Template" />
	<meta name="keywords" content="admin,dashboard" />
	<meta name="author" content="Steelcoders" />

	<!-- Styles -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href="/assets/admin/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
	<link href="/assets/admin/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
	<link href="/assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

	<?php  if(!empty(@$css_files)) : foreach ($css_files as $css) : ?>
		<link href="/assets/admin/<?=$css?>" rel="stylesheet" type="text/css"/>
    <?php endforeach; endif;?>

	<!-- Theme Styles -->
	<link href="/assets/admin/css/modern.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
	<link href="/assets/admin/css/custom.css" rel="stylesheet" type="text/css"/>

	<script src="/assets/admin/plugins/3d-bold-navigation/js/modernizr.js"></script>
	<script src="/assets/admin/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style type="text/css" rel="stylesheet">
		.table td, .table>tbody>tr>td {
			padding: 8px !important;
		}
	</style>

</head>