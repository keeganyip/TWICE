<?php

	require_once('db.php');
	$username = mysql_real_escape_string ($_REQUEST["email"]);
	$password = mysql_real_escape_string ($_REQUEST["password"]);

	$sql = "SELECT * FROM members WHERE Username = '".$username."' AND Password = md5('".$password."')";

	$result = mysql_query($sql);	//query
	$datarow = mysql_fetch_row($result);

	if	($datarow)
	{
		session_start();
		$_SESSION['Name'] = $datarow[1];
		$resultStr = header("Location: index.html");
		echo json_encode($resultStr);
	}
	else
	{
		echo("<script type='text/javascript'>
		alert('Invalid Password / Username, Please Try Again...');
		window.location = 'login.php';</script>");
	}

?>
