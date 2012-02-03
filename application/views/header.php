<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Advisement<?php echo ' - ' . $title; ?></title>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/css/extra.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php echo site_url(); ?>">Student Advisement</a>
					<ul class="nav">
						<li <?php if($active == 1){ echo 'class="active"'; } ?>>
							<a href="<?php echo site_url("dashboard"); ?>"><i class="icon-signal icon-white"></i>Dashboard</a>
						</li>
						<li <?php if($active == 2){ echo 'class="active"'; } ?>>
							<a href="<?php echo site_url("students"); ?>"><i class="icon-user icon-white"></i>Students</a>
						</li>
						<li <?php if($active == 3){ echo 'class="active"'; } ?>>
							<a href="<?php echo site_url("sheets"); ?>"><i class="icon-list-alt icon-white"></i>Distribution Sheets</a>
						</li>
						<li <?php if($active == 4){ echo 'class="active"'; } ?>>
							<a href="<?php echo site_url("schedules"); ?>"><i class="icon-calendar icon-white"></i>Schedules</a>
						</li>
		            </ul>
				</div>
			</div>
		</div>
		<div class="container">
