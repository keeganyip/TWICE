<?php
require_once ('db.php');
//Start Delete Contact
if(isset($_POST["action"]) and $_POST["action"]=="delete"){
	$id = (isset($_POST["ci"])? $_POST["ci"] : '');
	$sql = "delete from userstb where UserID = $id";

	$result = mysql_query($sql);

	if(!$result)
	{
		echo($sql);
		echo "Error";
		exit();
	}

}
//End Delete Contact

//Insert or Update contact information
if(isset($_POST['action_type']))
{
	if ($_POST['action_type'] == 'Register')
	{
		//Sanitize the data and assign to variables
		//$Userid = mysql_real_escape_string(strip_tags($_POST['UserID']));
		$username = mysqli_real_escape_string($dbconn,strip_tags($_POST['Username']));
		$password = mysqli_real_escape_string($dbconn,strip_tags($_POST['Password']));
		$DisplayName = mysqli_real_escape_string($dbconn,strip_tags($_POST['DisplayName']));

		if ($_POST['action_type'] == 'Register')
		{
			$CheckRecords = "SELECT * FROM members WHERE Username = '$username'";
			$queryResult = mysqli_query($dbconn,$CheckRecords);

			if(mysqli_num_rows($queryResult) > 0){

				echo("<script>
				if(confirm('This account is already registered.'))
				{
					window.location.replace('Login.html');
				}
				</script>");
				exit();

			}else{
			$sql = "insert into members set
					UserName = '$username',
					Password = md5('".$password."'),
					DisplayName = '$DisplayName'";
			}
		}


		if (!mysqli_query($dbconn,$sql))
		{
			echo($username);
			echo($password);
			echo($DisplayName);
			echo($sql);
			echo 'Error Saving Data. ';
			exit();
		}
	}
	header('Location: index.html');
	exit();
}

//Read registrants information from database : Stage 1
$sql = "select ID, UserName, DisplayName from members";

$result = mysqli_query($sql);

if(!$result)
{
	echo "Error";
	exit();
}

//Loop through each row on array and store the data to $reg_list[] : Stage 2
while($rows = mysqli_fetch_array($result))
{
	$list[] = array($rows['UserName'], $rows['DisplayName']);
}

include 'Reglist.php';
exit();

?>
