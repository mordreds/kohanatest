<?php include_once APPPATH."templates/admin/headtag.php"; ?>
<body class="page-header-fixed">
	<div class="overlay"></div>
	<!-- chat component-->

	<!-- ./chat component-->
	<form class="search-form" action="#" method="GET">
		<div class="input-group">
			<input type="text" name="search" class="form-control search-input" placeholder="Search...">
			<span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
		</div><!-- Input Group -->
	</form><!-- Search Form -->
	<main class="page-content content-wrap">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="sidebar-pusher">
					<a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
						<i class="fa fa-bars"></i>
					</a>
				</div>
				<div class="logo-box">
					<a href="/backoffice/dashboard" class="logo-text"><span>Modern</span></a>
				</div><!-- Logo Box -->
				<div class="search-button">
					<a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
				</div>
				<div class="topmenu-outer">
					<div class="top-menu">
						<ul class="nav navbar-nav navbar-left">
							<li>
								<a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
							</li>
							<li>
								<a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">1</span></a>
								<ul class="dropdown-menu title-caret dropdown-lg" role="menu">
									<li><p class="drop-title">You have 1 new  messages !</p></li>
									<li class="dropdown-menu-list slimscroll messages">
										<ul class="list-unstyled">
											<li>
												<a href="#">
													<div class="msg-img"><div class="online on"></div><img class="img-circle" src="/assets/admin/images/avatar2.png" alt=""></div>
													<p class="msg-name">Sandra Smith</p>
													<p class="msg-text">Hey ! I'm working on your project</p>
													<p class="msg-time">3 minutes ago</p>
												</a>
											</li>
										</ul>
									</li>
									<li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">1</span></a>
								<ul class="dropdown-menu title-caret dropdown-lg" role="menu">
									<li><p class="drop-title">You have 3 pending tasks !</p></li>
									<li class="dropdown-menu-list slimscroll tasks">
										<ul class="list-unstyled">
											<li>
												<a href="#">
													<div class="task-icon badge badge-success"><i class="icon-user"></i></div>
													<span class="badge badge-roundless badge-default pull-right">1min ago</span>
													<p class="task-details">New user registered.</p>
												</a>
											</li>
										</ul>
									</li>
									<li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
									<span class="user-name">David<i class="fa fa-angle-down"></i></span>
									<img class="img-circle avatar" src="/assets/admin/images/avatar1.png" width="40" height="40" alt="">
								</a>
								<ul class="dropdown-menu dropdown-list" role="menu">
									<li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
									<li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
									<li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a href="/backoffice/login"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
								</ul>
							</li>
							<li>
								<a href="/backoffice/login" class="log-out waves-effect waves-button waves-classic">
									<span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
									<i class="fa fa-comments"></i>
								</a>
							</li>
						</ul><!-- Nav -->
					</div><!-- Top Menu -->
				</div>
			</div>
		</div>
		<!-- Navbar -->
		<?php include_once APPPATH."templates/admin/sidebar.php"; ?>
		<!-- Page Sidebar -->
		<div class="page-inner">
			<div class="page-title">
				<h3><?=@$page_name?></h3>
				<div class="page-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="/backoffice/dashboard">Home</a></li>
						<li class="active"><?=@$page_name?></li>
					</ol>
				</div>
			</div>

			<?php include_once APPPATH."views/".@$pagefile; ?>

<?php include_once APPPATH."templates/admin/footer.php"; ?>

