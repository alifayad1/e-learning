<?php
include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{
				echo "Connection Done".mysqli_connect_error();
		}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

//echo "DELETE FROM user_info WHERE User_id='".$id."'";
$query="DELETE FROM lecture WHERE lecID='$id.'";
$result = mysqli_query($strconn,$query);
if($result)
								{
									echo "Lecture Deleted Successfully";
									//echo("<script>location.href = 'manageuser.php';</script>");
								}
								else
								{
									echo $result;
								}
mysqli_close($strconn);
header("Location: managecourses.php");

?> 	