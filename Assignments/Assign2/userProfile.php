<html>
<head><title>UserProfile</title></head>
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
	echo "WELCOME"

	?>


	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br /><br /><br />
</body>


</html>