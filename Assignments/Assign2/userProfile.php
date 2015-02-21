<html>
<head><title>UserProfile</title>
<link rel="stylesheet" type="text/css" href="extract.css">
<script type="text/javascript" src="author.js"></script>
</head>
<body>
	<div id="buttons">
		<button id="btn" onclick="location.href='../../index.html'">David's home Page</button>
		<button id="btn" onclick="location.href='../../assignments.html'">Assignments</button>
		<button id="btn" onclick="location.href='logout.php'">logout</button>
	<button id="btn" onclick="location.href='extract.php'">home</button>
	<button id="btn" onclick="location.href='story.php'">Stories</button>
	<button id="btn" onclick="location.href='profile.php'">Profiles</button>
	<button id="btn" onclick="location.href='genre.php'">genre</button></div>

	<?php
	require("dbConnector.php");
	$db = loadDatabase();

	?>

	<?php
	echo "<h1>WELCOME!</h1>";
	?>

	<div id="example"></div>

	<form method="post" action="userProfile.php">

	Would you like to create a new story? <br />

	Story Name: 
	<br />
	<?php 

	echo "Please select a genre: <br />";
	foreach ($db->query("SELECT genre_name FROM genre") as $row)
	{
 	  echo $row['genre_name'] . "<input type=radio name=genre value='" . $row['genre_name'];
 	  echo "'>";
	}

	echo "<br />";
	echo "<textarea rows=20 cols=40 name='newStory'></textarea>"

	?>

	Your current Stories
	<?php
	foreach ($db->query("SELECT * text_area FROM story where user_id = ") as $row)
	{
		echo "Author: " . $row['username'];
		echo "<br />";
		echo "<textarea rows='20' cols='50'>";
 	  echo $row['text_area'];
 	  echo "</textarea>";
	}
	?>

	<input type="submit" id="btn"></form>


	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br />
</body>


</html>