<?php
$name = filter_input(INPUT_POST, 'name');
$pwd= filter_input(INPUT_POST, 'pwd');
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
			$sql = "SELECT * FROM Udetails WHERE uname='$name'";
			$result=$conn->query($sql);
			if ($result->num_rows>0){
				while($row=$result->fetch_assoc())
					{
					
					//header("Location:page.html");
					//$url="page.html";
					 session_start();
					$_SESSION['varname']=$name;
					$pass=$row["pwd"];
					if(strcmp($pwd,$pass)!=0)
						{
						echo '<script  lang="javascript" type="text/javascript">alert("wrong password!!Please try AGAIN...")</script>';
						echo '<script  lang="javascript" type="text/javascript">window.open("login.html","_self")</script>';
						}
					else
						{
					echo '<script  lang="javascript" type="text/javascript">window.open("page.php","_blank")</script>';
					echo '<script  lang="javascript" type="text/javascript">window.open("loginsucc.html","_self")</script>';
						}
					//header("Location:menu.html");
					//echo "id: ".$row["sno"]."-name:",$row["uname"]."<br>";
					}
			}
			else{
				/*echo "Error: ". $sql ."
				". $conn->error;*/
				echo '<script  lang="javascript" type="text/javascript">alert("You are not a existing user,please complete your registration")</script>';
				echo '<script  lang="javascript" type="text/javascript">window.open("reg.html","_self")</script>';
				//echo "You are not a existing user,please complete your registration";
			}
			
			$conn->close();
		}
	
?>
