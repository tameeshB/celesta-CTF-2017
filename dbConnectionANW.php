<?php
define("DB_HOST2","linux.securedhosting.in");
define("DB_username2","celestao");
define("DB_password2","celest@@iitpa");
define("DB_database2","celestao_2017");

function dbConnectAnw() {
	$con = mysqli_connect(DB_HOST2,DB_username2,DB_password2,DB_database2);
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  die();
	}
	return $con;
}

?>
