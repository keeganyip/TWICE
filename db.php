<?php

	$dbhost = "localhost";
	$dbname = "fanclub";
	$dbuser = "root";
	$dbpassword = "";
	$dbconn = mysqli_connect($dbhost, $dbuser, $dbpassword) or die (mysql_error());
	mysqli_select_db($dbconn,$dbname);

?>
