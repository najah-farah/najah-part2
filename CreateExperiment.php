
<!DOCTYPE html>
<html>
<head>

<!-- webpage info goes here -->

    <title>Ethics Approval System</title>

	<meta name="author" content="Najah Alshahrani" />
	<meta name="description" content="" />

<!-- should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
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
				<a href="Logout.php">Logout |</a>
			</ul>
		</div>
		<div id="content">
			
      <form action="LoginPage.php">
        <p>

   <?php
					error_reporting('0');
					include("db_conf.php");
					session_start();

					$nme=$_GET["name"];
					$dsc=$_GET["desc"];
					$stud1=$_GET["student1"];
					$stud2=$_GET["student2"];
					$stud3=$_GET["student3"];
					$stud4=$_GET["student4"];
					$stud5=$_GET["student5"];
					$gatekep=$_SESSION["gatekeeperPerson"];
					
					if ($nme !="" and $dsc !="" and $stud1 !=""){
						$sql ="INSERT* INTO experiment (name, description, student1, student2, student3, student4, student5, teacher) VALUES ('$nme','$dsc','$stud1','$stud2','$stud3','$stud4','$stud5','$gatekep')";
						mysqli_query ($sql) or die(mysqli_error()."<br>".$sql);
						header ("Location: HomePageLecturer.php");
					}
					else{
						echo "You cannot leave the first three fields empty";
						
					}

				?>

  
  </form>
  <button class= "button" value="Create" onclick="window.location='CreateExperiment.html' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by Najah Alshahrani
		</div>
	</div>
</body>
</html>
