<?php
 session_start();
$name=$_SESSION['name'];
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "restuarant";
		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
			$sql = "DELETE FROM Orders WHERE name='{$name}'";
			if ($conn->query($sql)){
				// session_start();
					//$_SESSION['logname']=$name;
					//header("Location:Udetails.php");
					echo '<script  lang="javascript" type="text/javascript">window.open("logout.html","_blank")</script>';
				//echo "Record deleted sucessfully";
			}
			else{
				echo "Error: ". $sql ."
				". $conn->error;
			}
			$conn->close();
		}
//header("Location:Udetails.php");
?>
