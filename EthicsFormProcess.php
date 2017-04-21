

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
			
				<a href="#/home.html">Home |</a>
				<a href="#/about.html">About |</a>
				<a href="#/contact.html">Contact |</a>
				<a href="LoginPage.html">Login |</a>
			
		</div>
		<div id="content">
			<h2>Login</h2>
      <form action="LoginPage.php">
        <p>

   <?php
					error_reporting('0');
					include("db_conf.php");
					session_start();

					$nm=$_GET["name"];
					$sup=$_GET["supervisor"];
					$sch=$_GET["school"];
					$sn=$_GET["sno"];
					$prg=$_GET["program"];
					$tit=$_GET["title"];
					$sd=$_GET["sdate"];
					$dur=$_GET["duration"];
					$nra=$_GET["nhsradio"];
					$hra=$_GET["humanradio"];
					$ds=$_GET["des"];
					$ftu=$_GET["fileToUpload"];
					$cm1=$_GET["confirm1"];
					$cm2=$_GET["confirm2"];
					
					
					
					if ($nm !="" and $sup !="" and $sch !="" and $sn !="" and $prg !="" and $tit !="" and $sd !="" and $dur !="" and $nra !="" and $hra !="" and $ds !=""  and $cm2 =="True" and $cm1 =="True"){
						$sql ="INSERT*INTO ethicsform (name, supervisor, school, studentno, program, title, sdate, duration, nhs,human, des,fileupload) VALUES ('$nm','$sup','$sch','$sn','$prg','$tit','$sd','$dur','$nra','$hra','$ds','$ftu')";
						mysqli::_query ($sql) or die(mysqli_error()."<br>".$sql);
						$sql ="UPDATE experiment SET sb1=1 WHERE experimentid=$tit";
						mysqli_query ($sql) or die(mysqli_error()."<br>".$sql);
						echo "Record successful";
						header ("Location: HomePageStudent.php");
					}
					else{
						echo "You have to fill everyfield and select both checkboxes";
						
					}

				?>

  
  </form>
  <button class= "button" value="Create" onclick="window.location='CreateExperiment.html' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by Najah Alshahrani
			</p>
		</div>
	</div>
</body>
</html>
