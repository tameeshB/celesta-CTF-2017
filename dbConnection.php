<?php
define("DB_HOST","mysqlhost");
define("DB_username","DBusername");
define("DB_password","DB_USER_password");
define("DB_database","DBname");

function dbConnect() {
	$con = mysqli_connect(DB_HOST,DB_username,DB_password,DB_database);
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  die();
	}
	return $con;
}

?>
