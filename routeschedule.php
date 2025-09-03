<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
</head>
<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="images/logo.png" class="logo" alt="Dimple Star Transport" /></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
            <li><a href="terminal.php">Terminals</a></li>
			<li class="current"><a href="routeschedule.php">Routes / Schedules</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="book.php">Book Now</a></li>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div style="margin:0 auto; padding:30px 20px 20px 20px; width:820px;">
				<div class="login">
						<div id="right">
							<?php
								session_start();
								if(isset($_SESSION['email'])){
									$email = $_SESSION['email'];
									echo "Welcome,". $email. "!";
									echo "<a href='logout.php'>Logout</a>";
								}
								if(empty($email)){
									echo "<a href='signlog.php'></a>.";
								}?>
						</div>
					</div>
				<div id="right">
					<h3><?php include_once("php_includes/date_time.php"); ?></h3>
				</div>
				<img src="images/route.png" / width="820">
				<h2>(All trips are vice versa)</h2><hr>
				<table style="width: 110%; margin: 2rem auto; text-align: left;">
				  <tr>
					<th style="width: 25%; text-align: center;" ><h3>Origin</h3></td>
					<th style="width: 50%; text-align: center;"><h3>Regular Schedule</h3></td>		
					<th style="width: 75%; text-align: center;"><h3>Destination</h3></td>
				  </tr>
				  <tr>
					<th style="width: 25%; text-align: center;">Ali Mall Cubao Terminal</td>
					<th style="width: 50%; text-align: center;">9:00 am / 10:00 am / 1:00 pm / 4:00pm</td>		
					<th style="width: 75%; text-align: center;">San Jose</td>
				  </tr>
				  <tr>
					<th style="width: 25%; text-align: center;">Alabang Terminal</td>
					<th style="width: 50%; text-align: center;">6:00 am / 7:00 am / 2:00 pm / 6:00 pm / 10:00 pm</td>	
					<th style="width: 75%; text-align: center;">San Jose</td>
				  </tr>
				  <tr>
					<th style="width: 25%; text-align: center;">Cabuyao Terminal</td>
					<th style="width: 50%; text-align: center;">8:00 am / 9:00 am / 4:00 pm / 8:00 pm</td>		
					<th style="width: 75%; text-align: center;">San Jose</td>
				  </tr>
				  <tr>
					<th style="width: 25%; text-align: center;">Espana Terminal</td>
					<th style="width: 50%; text-align: center;">4:30 am / 5:30 am / 12:00 am / 4:00 pm / 8:00 pm</td>	
					<th style="width: 75%; text-align: center;">San Jose</td>
				  </tr>
				  <tr>
					<th style="width: 25%; text-align: center;">San Lazaro Terminal</td>
					<th style="width: 50%; text-align: center;">3:00 am / 4:30 am / 11:00 am / 3:00 pm / 7:00 pm</td>	
					<th style="width: 75%; text-align: center;">San Jose</td>
				  </tr>
				  <tr>
					<th style="width: 25%; text-align: center;">Pasay Terminal</td>
					<th style="width: 50%; text-align: center;">5:00 am / 6:00 am / 1:00 pm / 3:00pm</td>	
					<th style="width: 75%; text-align: center;">San Jose</td>
				  </tr>
				</table>
				<div class="column-clear"></div>
            </div>
				<div class="clearfix"></div>
        </div>
    </div>
    
<div id="footer">
	<a href="index.php"><img src="images/footer-logo.jpg" alt="Dimple Star Transport" /></a>
	<p>&copy;Dimple Star Transport<br /></p>
</div>

</div>
</body>
</html>