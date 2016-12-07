<?php

/**
* This file creates a new SQLite connection using the PDO class.
* The db name is taken from config.php.
*/

try {
	$db = new \PDO("sqlite:$db_name");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$db->exec("CREATE TABLE IF NOT EXISTS contacts (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT,
                    email TEXT UNIQUE)
			");
}
catch(PDOException $e) {
	error_log($e->getMessage());
	die("A database error was encountered while connecting to database.");
}


?>