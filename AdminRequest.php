

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
			
		</div>
		<div id="content">
			<h2>Login</h2>
      <form action="LoginPage.php">
        <p>
		

   <?php
					error_reporting('0');
					include("db_conf.php");
					session_start();

					
					$a=$_SESSION["gatekeeperPerson"];
					echo $a;
					$result = mysqli_query ("select * from experiment WHERE as1=0 || as2=0 || as3=0 || as4=0 || as5=0  ");
					
					if ($result == "")
					{
 
						echo "no details found";
					}
					
						else
					{
						echo " <br/>";
						
 ?>
 <table>
		<tr class="alert alert-info" height="200">
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment ID</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Name</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Description</strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc">Teacher ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Assign EAO</strong></td>


		  </tr>
		  <?php

					while ($row = mysqli_fetch_array($result))
					{
					echo " <br/>";

				?>
				<tr class="alert alert-info" height="200">
				<h2>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['experimentid']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['name']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['description']; ?></strong></td>
			<td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['teacher']; ?></strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php 
		  

		  if ( $row['as1'] == 0 &&  $row['as2'] && 0 && $row['as3'] == 0 &&  $row['as4'] == 0 && $row['as5'] == 0)
		  {
			  $ab=$row['experimentid'];
			  echo "<a href='AssignEAO.php?a=$ab'>Press Assign</a>";
		  }
		  else{
			   echo "EAO assigned";
		  }
	 
		  ?></strong></td>
		  
		  
		  </h2>
		  </tr>
		   <?php
					}} ?>

  </Table>
  </form>
  <br/> <br/>
  <button class= "button" value="Create" onclick="window.location='HomePageAdmin.php' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">Najah Alshahrani</a>
			</p>
		</div>
	</div>
</body>
</html>
