<?php

function loadDatabase()
{
	$dbHost = "";
	$dbPort = "";
	$dbUser = "";
	$dbPassword = "";

	$dbName = "author_web";

	// openShiftVar is not getting set... it is null
    $openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');
	
    if ($openShiftVar === null || $openShiftVar == "")
    {
		// Not in the openshift environment
        require("setLocalDatabaseCredentials.php");
				
		$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
	}
    else 
    { 
        // In the openshift environment
		
        $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
        $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
        $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
        $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
		
		$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    } 
    
	return $db;
}

?>
