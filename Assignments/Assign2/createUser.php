<html>
<head><title>Scriptures</title></head>
<body>



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
	<button id="btn" onclick="location.href='genre.php'">genre</button></div>s

<?php
  require("dbConnector.php");
  $db = loadDatabase();

  ?>






	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = 'INSERT INTO user(username, password) VALUES(:username, :password)';

	$statement = $db->prepare($query);

	$statement->bindParam(':username', $username);
	$statement->bindParam(':password', $password);

	$statement->execute();

	$scriptsId = $db->lastInsertId();
	?>

	
	<?php
	echo "<h1>Congrats on making your profile " . $username . "<h1>";

	?>
	
</body>
</html>