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
		$username = mysql_real_escape_string(strip_tags($_POST['Username']));
		$password = mysql_real_escape_string(strip_tags($_POST['Password']));
		$CourseNameID = mysql_real_escape_string(strip_tags($_POST['CourseID']));
		$contact = mysql_real_escape_string(strip_tags($_POST['ContactNumber']));
		$email = mysql_real_escape_string(strip_tags($_POST['Email']));
		
		if ($_POST['action_type'] == 'Register')
		{
			$CheckRecords = "SELECT * FROM userstb WHERE ContactNumber = '$contact' AND CourseNameID = '$CourseNameID'";
			$queryResult = mysql_query($CheckRecords);
			
			if(mysql_num_rows($queryResult) > 0){
				
				echo("<script>
				if(confirm('You already have registered for this course.'))
				{
					window.location.replace('registerPage.php');
				}else{
					window.history.back();
				}
				</script>");
				exit();
				
			}else{
			$sql = "insert into userstb set 
					UserName = '$username',
					Password = md5('".$password."'),
					CourseNameID = '$CourseNameID',
					Email = '$email',
					ContactNumber = '$contact',
					RegistrationDate = CurDate()";
			}
		}
		
		if (!mysql_query($sql))
		{
			//echo($Userid);
			//echo($username);
			//echo($password);
			//echo($contact);
			//echo($email);
			//echo ($courseNameID);
			echo 'Error Saving Data. ';
			exit();	
		}
	}
	header('Location: index.php');
	exit();
}

//Read registrants information from database : Stage 1
$sql = "select UserID, UserName, Email, ContactNumber, RegistrationDate, CourseName from userstb, coursetb where CourseID = CourseNameID";

$result = mysql_query($sql);

if(!$result)
{
	echo "Error";
	exit();
}

//Loop through each row on array and store the data to $reg_list[] : Stage 2
while($rows = mysql_fetch_array($result))
{
	$list[] = array($rows['UserName'], $rows['Email'], $rows['ContactNumber'], $rows['RegistrationDate'], $rows['CourseName'],$rows['UserID']);
}

include 'Reglist.php';
exit();

?>
