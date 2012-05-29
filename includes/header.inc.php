<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Tech for Engagement Summit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-top: 60px;
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }`
	.carousel .item {
	  text-align: center;
	}
	.carousel .item img {
	  display: inline !important;
	}
	.stickies {
	  text-align: center;
	  margin-bottom: 25px;
	}
	.stickies iframe {
	  width: 100%;
	  border: none;
	  padding: 0;
	  margin: 0;
	  height: 250px;
	}
	.etherpad iframe {
	  width: 100%;
	  height: 1200px;
	  border: none;
	  padding: 0;
	  margin: 0;
	}
	.hidden {
	  display: none;
	}
	</style>
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
<!--    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">-->
  </head>

  <body>

	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container">
		  <!--<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>-->
		  <a class="brand" href="#">Technology for Engagement Summit</a>
<!--          <div class="btn-group pull-right">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			  <i class="icon-user"></i> Username
			  <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
			  <li><a href="#">Profile</a></li>
			  <li class="divider"></li>
			  <li><a href="#">Sign Out</a></li>
			</ul>
		  </div>-->
<!--         <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#about">About</a></li>
			  <li><a href="#contact">Contact</a></li>
			</ul>
		  </div>--><!--/.nav-collapse -->
		  <ul class="nav pull-right">
			<li><a href="#">#tech4engage</a></li>
		  </ul>
		</div>
	  </div>
	</div>

	<div class="container">
		
		<div class="well">
			<h1>Welcome to the Tech for Engagement Summit</h1>
			<p>This website will serve as a staging ground and collaboration space for all the participants.</p>
		</div>
		<br />
		
		<ul class="nav nav-tabs" id="section-nav">
		  <li <?php if ($section == 'overview') echo 'class="active"'; ?>>
			<a href="./">Overview</a>
		  </li>
		  <li <?php if ($section == 'stickies') echo 'class="active"'; ?>>
			  <a href="./stickies">Stickies</a></li>
		  <li <?php if ($section == 'sessions') echo 'class="active"'; ?>>
		  <a href="./sessions">Sessions</a>
		  </li>
		  <li <?php if ($section == 'feedback') echo 'class="active"'; ?>>
		  	<a href="./feedback">Feedback</a>
		  </li>
		</ul>