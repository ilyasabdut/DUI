<!DOCTYPE html>
<head>
<title>Informatika Unpad</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{URL::to('/')}}/admasset/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{URL::to('/')}}/admasset/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{URL::to('/')}}/admasset/css/font.css" type="text/css"/>
<link href="{{URL::to('/')}}/admasset/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="{{URL::to('/')}}/admasset/js/jquery2.0.3.min.js"></script>
<script src="{{URL::to('/')}}/admasset/js/modernizr.js"></script>
<script src="{{URL::to('/')}}/admasset/js/jquery.cookie.js"></script>
<script src="{{URL::to('/')}}/admasset/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
		</script>

</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="{{'/admin'}}">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li>
				<a href="{{'/admin/vNews/table'}}">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					News Tables
					</span>
				</a>
			</li>
			<li>
				<a href="{{'/admin/vPartnership/table'}}">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Partnership Tables
					</span>
				</a>
			</li>
			<li>
				<a href="{{'/admin/vEducation/table'}}">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Education Tables
					</span>
				</a>
			</li>
			<li>
				<a href="{{'/admin/vAlumni/table'}}">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Alumni Tables
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Lecturer Tables</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="{{'/admin/vDosen/table'}}">Lecturers Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vPublicationDosen/table'}}">Lecturers Publication Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vResearchDosen/table'}}">Lecturers Research Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vDedicationDosen/table'}}">Lecturers Social Engagement Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vAchievementDosen/table'}}">Lecturers Achievement Tables</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Student Tables</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="{{'/admin/vMahasiswa/table'}}">Student Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vPublicationMhs/table'}}">Student Publication Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vResearchMhs/table'}}">Student Research Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vDedicationMhs/table'}}">Student Social Engagement Tables</a>
					</li>
					<li>
						<a class="subnav-text" href="{{'/admin/vAchievementMhs/table'}}">Student Achievement Tables</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="{{'/'}}">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="{{'/admin'}}"><img src="images/logo.png" alt="" />Admin</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
				</section>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
									<li> <a href="{{'/'}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">
				<!-- blank-page -->
