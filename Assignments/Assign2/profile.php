<html>
<head><title>The hidden Author home page</title>

	<link rel="stylesheet" type="text/css" href="extract.css">
</head>

<body>
	<div id="buttons">
		<button id="btn" onclick="location.href='../../index.html'">David's home Page</button>
		<button id="btn" onclick="location.href='../../assignments.html'">Assignments</button>
		<button id="btn" onclick="location.href='login.php'">login</button>
	<button id="btn" onclick="location.href='extract.php'">home</button>
	<button id="btn" onclick="location.href='story.php'">Stories</button>
	<button id="btn" onclick="location.href='profile.php'">Profiles</button>
	<button id="btn" onclick="location.href='genre.php'">genre</button></div>

	<?php
	require("dbConnector.php");
	$db = loadDatabase();

	?>

	<?php
	echo "<h1>There is only one profile so far</h1>";
	foreach ($db->query("SELECT username, password FROM user") as $row)
	{
 	  echo "<strong> Profile: " . $row['username'];
 	  echo "<br /> Password: None of your business"; 
 	  echo "<br /></br />";
	}
	?>


	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br />
</body>