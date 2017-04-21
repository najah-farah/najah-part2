

<html>
<head>

<!-- webpage info goes here -->

    <title>Ethics Approval System</title>

	<meta name="author" content="Najah Alshahrani" />
	<meta name="description" content="" />

<!--  should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div>
			<h1 align='center'><a href="/" id="logoLink">Ethics Approval System</a></h1>
		</div>
		<div>
			
				<a href="#/home.html">Home |</a>
				<a href="#/about.html">About |</a>
				<a href="#/contact.html">Contact |</a>
				<a href="Codes/LoginPage.html">Login |</a>
			</ul>
		</div>
		<div id="content">
			<h2>Login</h2>
      <form action="LoginPage.php">
        <p>
		<table>
		<tr class="alert alert-info" height="200">
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment ID</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Name</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Description</strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 1 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 2 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 3 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 4 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 5 ID</strong></td>
		  </tr>

   <?php
					error_reporting('0');
					include("db_conf.php");
					session_start();

					
					$a=$_SESSION["gatekeeperPerson"];
					$result = mysqli_query ("select * from experiment WHERE teacher='$a'  ");
					
					if ($result == "")
					{
 
						echo "no details found";
					}
						else
					{
						echo " <br/>";
 

					while ($row = mysqli_fetch_array($result))
					{
					echo " <br/>";

				?>
				<tr class="alert alert-info" height="200">
				<h2>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['experimentid']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['name']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['description']; ?></strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student1']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student2']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student3']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student4']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student5']; ?></strong></td>
		  </h2>
		  </tr>
		   <?php
					}} ?>

  </Table>
  </form>
  <br/> <br/>
  <button class= "button" value="Create" onclick="window.location='HomePageLecturer.php' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by Najah Alshahrani
			</p>
		</div>
	</div>
</body>
</html>
