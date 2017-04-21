<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Ethics Approval System</title>

	<meta name="author" content="Najah Alshahrani" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div>
			<h1 align='center'><a href="/">Ethics Approval System</a></h1>
		</div>
		<div>
			
				<a href="">Home |</a>
				<a href="">About |</a>
				<a href="">Contact |</a>
				<a href="#">Request |</a>
				<a href="Logout.php">Logout |</a>
			</ul>
		</div>
		<div id="content">
		<?php
		session_start();

			echo "<h3>";
			echo "Welcome..... $_SESSION[gatekeeper]";
			echo "</h3>";

			?>
			<h2>Home</h2>
			<p>
				This is an Ethics Management System for the University RGU<br>
				Currently EAO approval is under construction!
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by Najah Alshahrani</a>
			</p>
		</div>
	</div>
</body>
</html>
