<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
  <style>
h3 {text-align: 1000px;}

.foo input
{
  width: 50px;
    padding-right: 6px 10px;
    padding-left: 6px 10px;
}
.background {
	height: 1080px;
	width: 1920px;

	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QSXhkaG1VaEhSTjA
);
	background-repeat: repeat-x;
	background-position: top center;
	background-size: contain;
}
</style>
  <title>Find Trains</title>
  <link rel="shortcut icon" type="image/png" href="../images/logo.jpg"/>
   <link rel="stylesheet" href="../css/skel.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-xlarge.css" /> </head>
<body id="top">
  <header id="header" class="skel-layers-fixed">
        <nav class="nav">
        <div class="container">
      <div class="navbar-header">
<!--        <a href="#" class="pull-left ">
      <div id="logo" alt="TheAppleTalks Logo"></div>  -->
      </a>
      <div class="navbar-brand">
      </div></div></div></nav>
        <nav id="nav" class="">
          <ul>
            <li><strong><?php if ($_SESSION['Admin'] == '1') {?>
              <a href="../Admin/admin.php">DASHBOARD</a>
              <?php } elseif ($_SESSION['Admin'] == '0') {?>
              <a href="../dashboard/dashboard.php">DASHBOARD</a>
            <?php } else {?><a href="../index.php">HOME</a>
            <?php }?></strong></li>
            <li><strong><a href="../statusretriever.php">LIVE STATUS</a></strong></li>
<!--            <li><strong><a href="../Ticket/ticket.php">TICKET RESERVATION</a></strong></li> -->
            <li><strong><div class="dropdown"><a class="dropbtn">ENQUIRY</a>
              <div class="dropdown-content">
              <a href="#" class="selected">Train Details</a>
              <a href="../fare/fare.php">Fare Enquiry</a>
              <a href="../Cancelled_trains/Cancelled_trains.php">Cancelled_trains</a>
              <a href="../Train_route/Route_retriever.php">Train Route Information</a></div>
            </div></strong></li>
            <li><strong><a href="../About.php">ABOUT</a></strong></li>
            <li><strong><a href="../Team.php">TEAM</a></strong></li>
            <li><strong><a href="../contact.php">CONTACT</a></strong></li>
          </ul>
        </nav>
  </header>
  <section>
  <div class="background" style="padding-top:100px">
    <strong><strong><b><h3 style="color:white;">ENTER DETAILS</h3></b></strong></strong>
<form action="?"  method="post">
  <strong><h1 style="color:white;">Source:</h1></strong>
  <input type="text" name="s" class="foo" style="color:white;width=580px" required><br><br><br>
  <strong><h1 style="color:white;">Destination:</h1></strong>
  <input type= "text" name="d" style="color:white;width:580px" required> <br><br>
  <input type="submit" value="Submit" name ="submit">
</form></div></section>
</body>
</html>
<?php
if (array_key_exists("submit", $_POST)) {
    $db = mysqli_connect("localhost", "root", "", "rail_connect") or die("Unable to Connect to the Database.");
    $src = mysqli_real_escape_string($db, $_POST['s']);
    $dst = mysqli_real_escape_string($db, $_POST['d']);
    echo '<table>';
    echo "<tr>";
    echo "<th>Source</th>";
    echo "<th>Destination</th>";
    echo "<th>Train Name</th>";
    echo "<th>Train Number</th>";
    echo "<th>Train Duration(hrs)</th>";
    echo "<th>Distance Covered(Kms)</th>";
    echo "<th>Train Type</th></tr>";
    $q = mysqli_query($db, "SELECT * FROM trains WHERE from_station_name LIKE '%" . $src . "%' AND to_station_name LIKE '%" . $dst . "%';");
    if ($q == true) {
        $n = mysqli_num_rows($q);
        for ($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_array($q);
            echo "<tr><td>{$row['from_station_name']}</td><td>{$row['to_station_name']}</td><td>{$row['train_name']}</td><td>{$row['train_number']}</td><td>{$row['duration']}</td><td>{$row['distance']}</td><td>{$row['train_type']}</td></tr>";
        }
    }

}

?>
