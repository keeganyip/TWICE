<?php

	$dbhost = "localhost";
	$dbname = "fanclub";
	$dbuser = "root";
	$dbpassword = "";
	$dbconn = mysql_connect($dbhost, $dbuser, $dbpassword) or die (mysql_error());
	mysql_select_db($dbname, $dbconn);

?>
