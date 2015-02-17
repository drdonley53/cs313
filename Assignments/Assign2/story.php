<html>
<head><title>The hidden Author home page</title>

	<link rel="stylesheet" type="text/css" href="extract.css">
</head>

<body>
	<div id="buttons">
		<button id="btn" onclick="location.href='../../index.html'">David's home Page</button>
		<button id="btn" onclick="location.href='../../assignments.html'">Assignments</button>
    <button id="btn" onclick="location.href='login.php'">login</button>
	<button id="btn" onclick="location.href='extract.php'">Home</button>
	<button id="btn" onclick="location.href='story.php'">Stories</button>
	<button id="btn" onclick="location.href='profile.php'">Profiles</button>
	<button id="btn" onclick="location.href='genre.php'">genre</button></div>

  <?php
  require("dbConnector.php");
  $db = loadDatabase();

  ?>


	<?php
	echo "<h1>There is only one story so far</h1>";
	
	foreach ($db->query("SELECT text_area, username FROM story, user") as $row)
	{
		echo "Author: " . $row['username'];
		echo "<br />";
		echo "<textarea rows='20' cols='50'>";
 	  echo $row['text_area'];
 	  echo "</textarea>";
	}
	
	?>
	
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br />
</body>