
<?php
  require("dbConnector.php");
  $db = loadDatabase();

  ?>

  <?php
  $ID = $_POST['username'];
  $Password = $_POST['password'];

  function SignIn() 
  { 
  session_start(); //starting the session for user profile page 
  echo "Hello";
	if(!empty($_POST['username'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
	{ 
		$query = "SELECT * FROM username where username = '$_POST[username]' AND password = '$_POST[password]'" or die(error());
		$row = fetch_array($query) or die(error());
		if(!empty($row['username']) AND !empty($row['password'])) 
			{ 
				$_SESSION['username'] = $row['password']; 
				echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
			} 
			else 
				{ 
					echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
				} 
			} 
		} 
		if(isset($_POST['submit'])) 
		{ 
			SignIn(); 
		} 
		?>