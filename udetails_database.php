<?php
$name = filter_input(INPUT_POST, 'Name');
$email= filter_input(INPUT_POST, 'emailid');
$dob= filter_input(INPUT_POST, 'dob');
$phone= filter_input(INPUT_POST, 'mobileno');
$sex= filter_input(INPUT_POST, 'sex');
$pwd= filter_input(INPUT_POST, 'password');
$area=$_POST['Area'];
echo "name";
//echo $name;
$address= filter_input(INPUT_POST, 'add');
 
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "restuarant";
		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		//$conn = new mysqli ($host,$dbname);
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO Udetails (uname,email,dob,phone,sex,pwd,area,address) values 			('$name','$email','$dob','$phone','$sex','$pwd','$area','$address')";
			if ($conn->query($sql)){
				//echo "New record is inserted sucessfully";
			}
			else{
				echo "Error: ". $sql ."
				". $conn->error;
			}
			$conn->close();
		}
header("Location:login.html");
	
?>
