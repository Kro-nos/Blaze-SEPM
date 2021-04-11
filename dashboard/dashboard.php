<?php
session_start();
if (array_key_exists("uid", $_COOKIE)) {
    $_SESSION['uid'] = $_COOKIE['uid'];
}
if (array_key_exists("uid", $_SESSION)) {
    echo "Logged in!";
} else {
    header("Location:../login.php");
}
$db = mysqli_connect("localhost", "root", "", "rail_connect");
if (mysqli_connect_error()) {
    die("Database Connection Error.");
}
$query = "SELECT username FROM users WHERE uid='" . mysqli_real_escape_string($db, $_SESSION['uid']) . "' LIMIT 1";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$un = $row['username'];
$u = explode("@", $row['username']);
?>

<head>
	<title>Welcome <?php echo $u[0]; ?></title>
  <meta http-equiv="Cache-control" content="no-cache">
  <meta http-equiv="refresh" content="900;url=index.php" />
	<link rel="shortcut icon" type="image/png" href="../images/logo.jpg"/>
	<link rel="stylesheet" href="../css/style.css" />
	 <link rel="stylesheet" href="../css/skel.css" />
</head>
		<!-- Header -->
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
						<li><strong><a href="#" class="selected">DASHBOARD</a></strong></li>
						<li><strong><a href="../statusretriever.php">LIVE STATUS</a></strong></li>
<!--						<li><strong><a href="../Ticket/ticket.php">TICKET RESERVATION</a></strong></li> -->
						<li><strong><div class="dropdown"><a class="dropbtn">ENQUIRY</a>
							<div class="dropdown-content">
							<a href="../traind/traind.php">Train Details</a>
              <a href="../fare/fare.php">Fare Enquiry</a>
							<a href="../Cancelled_trains/Cancelled_trains.php">Cancelled_trains</a>
							<a href="../Train_route/Route_retriever.php">Train Route Information</a></div>
						</div></strong></li>
						<li><strong><a href="../About.php">ABOUT</a></strong></li>
						<li><strong><a href="../Team.php">TEAM</a></strong></li>
						<li><strong><a href="../contact.php">CONTACT</a></strong></li>
						<li><strong><div class="dropdown"><a class="dropbtn">PLAY GAMES</a>
            <div class="dropdown-content">
            <a href="../snake.html">Snake Game</a>
            <a href="../raise.html">Accelerate</a></div>
					</ul>
				</nav>
			</header>
			<section id="banner">
				<div class="inner">
					<h2>WELCOME <?php echo $u[0]; ?></h2>
					<strong><span class="role"></span></strong>
					<ul class="actions">
						<li><a target="_blank" href="../index.php?logout=1" class="button big special">Logout</a></li>
					</ul>
				</div>
			</section>
<script type="text/javascript" src="js/typed.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
