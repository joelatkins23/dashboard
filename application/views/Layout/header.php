<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HappinessIndex</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="asset/styles/bootstrap4/bootstrap.min.css">
<link href="asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="asset/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="asset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="asset/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="asset/plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="asset/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="asset/styles/styles.css">
<link rel="stylesheet" type="text/css" href="asset/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="asset/styles/contact_responsive.css">
<script src="asset/js/jquery-3.2.1.min.js"></script>
<script src="asset/styles/bootstrap4/popper.js"></script>
<script src="asset/styles/bootstrap4/bootstrap.min.js"></script>
<script src="asset/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="asset/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="asset/plugins/easing/easing.js"></script>
<script src="asset/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="asset/js/contact_custom.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>
</head>

<body>
<div class="super_container">
	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Tel : 123456789</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Language / My Account -->

								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Arabic</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">HappinessIndex</a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index">Dashboard</a></li>
								<li><a href="about">About</a></li>
								<li><a href="contact">contact</a></li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>
	<div class="fs_menu_overlay"></div>
	
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">English</a></li>
						<li><a href="#">Arabic</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index">Dashboard</a></li>
				<li class="menu_item"><a href="about">About</a></li>
				<li class="menu_item"><a href="contact">contact</a></li>
			</ul>
		</div>
	</div>