<?php
  require("dbConnector.php");
  $db = loadDatabase();

  ?>


	<?php
	$story = $_POST['newStory'];
	$genre = $_POST['genre'];

	$query = 'INSERT INTO story(text_area, genre_id) VALUES(:story, :genre)';

	$statement = $db->prepare($query);

	$statement->bindParam(':story', $story);
	$statement->bindParam(':genre', $genre);

	$statement->execute();
	?>

	
	<?php
	echo "<h1>Congrats on making your profile " . $username . "<h1>";

	?>