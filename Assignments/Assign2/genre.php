<html>
<head><title>The hidden Author home page</title>

	<link rel="stylesheet" type="text/css" href="extract.css">
	 <script type="text/javascript" src="author.js"></script>
</head>

<body>
	<div id="buttons">
		<button id="btn" onclick="location.href='../../index.html'">David's home Page</button>
		<button id="btn" onclick="location.href='../../assignments.html'">Assignments</button>
	<button id="btn" onclick="location.href='extract.php'">Home</button>
	<button id="btn" onclick="location.href='story.php'">Stories</button>
	<button id="btn" onclick="location.href='profile.php'">Profiles</button>
	<button id="btn" onclick="location.href='genre.php'">genre</button></div>

	<?php
	require("dbConnector.php");
	$db = loadDatabase();

	?>

	<?php
	echo "<h1>Genre list</h1>";
	foreach ($db->query("SELECT genre_name FROM genre") as $row)
	{
 	  echo "<button>" . $row['genre_name'];
 	  echo "</button>";
	}
	?>
	
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br />
</body>