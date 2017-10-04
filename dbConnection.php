<?php
define("DB_HOST","linux.securedhosting.in");
define("DB_username","celestao_ctf");
define("DB_password","ctf@celest@@iitpa");
define("DB_database","celestao_ctf");

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
