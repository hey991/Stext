<?php

// Include the configuration file
require_once('config.php');

// Connect to the database using secure credentials
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
}

?>
