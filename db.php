<?php

	$dbhost = "sql103.epizy.com";
	$dbname = "epiz_24079977_fanclub";
	$dbuser = "epiz_24079977";
	$dbpassword = "v5eMsdybrv9b";
	$dbconn = mysqli_connect($dbhost, $dbuser, $dbpassword) or die (mysqli_error());
	mysqli_select_db($dbconn,$dbname);

?>
