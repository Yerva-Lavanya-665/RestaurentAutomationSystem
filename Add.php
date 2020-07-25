<?php
 $operation = filter_input(INPUT_POST, 'additem');
 $cos = filter_input(INPUT_POST, 'addcost');
 $cost=(int)$cos;
 //echo $operation;
//echo $cost;
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
			$sql = "INSERT INTO Menu (item, price)
			values ('$operation','$cost')";
			if ($conn->query($sql)){
				//echo "New record is inserted sucessfully";
			}
			else{
				//echo "Error: ". $sql ."". $conn->error;
			}
			$conn->close();
		}
header('Location:Manager.php');
?>
