<?php

	require_once('db.php');
	$username = mysqli_real_escape_string ($dbconn,$_REQUEST["Username"]);
	$password = mysqli_real_escape_string ($dbconn,$_REQUEST["password"]);

	$sql = "SELECT * FROM members WHERE Username = '".$username."' AND Password = md5('".$password."')";

	$result = mysqli_query($dbconn,$sql);	//query
	$datarow = mysqli_fetch_row($result);

	if	($datarow)
	{
		session_start();
		$_SESSION['Name'] = $datarow[1];
		$resultStr = header("Location: Schedule.php");
		echo json_encode($resultStr);
	}
	else
	{
		echo("<script type='text/javascript'>
		alert('Invalid Password / Username, Please Try Again...');
		</script>");
		header("Location: Login.html");
	}

?>
