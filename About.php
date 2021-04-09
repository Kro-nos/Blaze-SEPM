<?php
session_start();
if (array_key_exists('Admin', $_SESSION) === false) {
    $_SESSION['Admin'] = '-1';
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>About Us - Our Team</title>
    <meta http-equiv="Cache-control" content="no-cache">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<header id="header" class="skel-layers-fixed">
				<nav class="nav">
				<div class="container">
	    <div class="navbar-header">
<!--	    	<a href="#" class="pull-left ">
	    <div id="logo" alt="TheAppleTalks Logo"></div> -->
	    </a>
	    <div class="navbar-brand">
	    </div></div></div></nav>
				<nav id="nav" class="">
					<ul>
						<li><strong><?php if ($_SESSION['Admin'] == '1') {?>
              <a href="../Admin/admin.php">DASHBOARD</a>
              <?php } elseif ($_SESSION['Admin'] == '0') {?>
              <a href="../dashboard/dashboard.php">DASHBOARD</a>
            <?php } elseif ($_SESSION['Admin'] == '-1') {?><a href="/index.php">HOME</a>
            <?php }?></strong></li>
						<li><strong><a href="statusretriever.php">LIVE STATUS</a></strong></li>
<!--						<li><strong><a href="Ticket/ticket.php">TICKET RESERVATION</a></strong></li>  -->
						<li><strong><div class="dropdown"><a class="dropbtn">ENQUIRY</a>
							<div class="dropdown-content">
							<a href="traind/traind.php">Train Details</a>
							<a href="fare/fare.php">Fare Enquiry</a>
							<a href="Cancelled_trains/Cancelled_trains.php">Cancelled_trains</a>
							<a href="Train_route/Route_retriever.php">Train Route Information</a></div>
						</div></strong></li>
						<li><strong><a href="About.php" class="selected">ABOUT</a></strong></li>
						<li><strong><a href="Team.php">TEAM</a></strong></li>
						<li><strong><a href="contact.php">CONTACT</a></strong></li>
					</ul>
				</nav>
			</header>
		<!-- Main -->
    
			<section id="main" class="wrapper style1">

				<div class="container">
					<section>
						<a href="#" class="image fit"><img src="images/hqdefault.png" alt="Image cannot be loaded" width="693.3" height="600" /></a>
						<p>*Our Aim is to <br>
Provide a fully functional website to locate any train at any time and
find the approximate time of arrival to the next station and the nearby station of the user
</p><br>
						<ul><u> Our Project has Following Main Features</u>
							<li>Find the location of any train in the country</li>
							<li>Predict the time taken to reach the next nearby station and the station nearer the user(Premium users)</li>
							<li>Upgrade for premium account</li>
							<li>Play games(premium users)</li>
							

						</ul>
					</section>
						</div>
			</section>

			<script type="text/javascript" src="js/script.js"></script>

	</body>
</html>
