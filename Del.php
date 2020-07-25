<?php
 $delitem = filter_input(INPUT_POST, 'delitem');
 //echo $delitem;
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
			$sql = "DELETE FROM Menu WHERE item='$delitem'";
			if ($conn->query($sql)){
				//echo "record deleted  sucessfully";
			}
			else{
				//echo "Error: ". $sql ."
				//". $conn->error;
			}
			$conn->close();
		}
header('Location:Manager.php');
?>
