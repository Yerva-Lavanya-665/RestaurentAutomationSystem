<?php
$ar=array();
$iar=array();
session_start();
$name=$_SESSION['varname3'];

$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "restuarant";
		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

 $varNames = array_keys($_POST);
 $var = array();
    //transfer form data to an associative array
    foreach($varNames as $value) {
        $var[$value] = $_POST[$value];
    }
    
    
    
      $sql = "SELECT * FROM Menu";
				$result=$conn->query($sql);
				if ($result->num_rows>0){
					//while($row=$result->fetch_assoc())
					while($row=mysqli_fetch_row($result))
						{
						array_push($ar,$row[0]);
						array_push($iar,$row[1]);
						//printf ("%s \n",$row[0]);
						}
				}
				$conn->close();
				
     
    //display the sent form data
    $i=0;
    foreach($var as $key=>$value) {
    	$var["'.$key.'"] = $value;
    	echo $var["'.$key.'"];
        //echo '$var["'.$key.'"] = '.$value.'<br />';
        
        
      
        
        
        if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
			if($var["'.$key.'"]!="")
				{
				$temp=$var["'.$key.'"];
				$tempi=(int)$var["'.$key.'"];
				$item=$ar[$i];
				$cost=$iar[$i];
				echo $temp;
				
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				$sql = "INSERT INTO Orders (name,item,cost,qnty) values ('$name','$item','$cost','$temp')";
				if ($conn->query($sql)){
					//echo "ew record is inserted sucessfully";
					}
				else{
						echo "Error: ". $sql ."". $conn->error;
					}
					
				//$conn->close();
				}
		
			
		     }
        
        $i=$i+1;
  	  }
header("Location:orderdetails.php");

?>


<?php
/*
 $dosa = filter_input(INPUT_POST, 'Veg Biryani');
      $dosa=$_POST[$name];
$idly= filter_input(INPUT_POST, 'idly');
$vada= filter_input(INPUT_POST, 'vada');
$ice= filter_input(INPUT_POST, 'ice');
$puri= filter_input(INPUT_POST, 'puri');
$cool= filter_input(INPUT_POST, 'cool');
//$area=$_POST['dosa'];
 echo $dosa;
 echo "hello";
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
			if($dosa!="")
				{
				$sql = "INSERT INTO Orders (name,item,cost,qnty) values ('$name','dosa','10','$dosa')";
				if ($conn->query($sql)){
					//echo "ew record is inserted sucessfully";
					}
				else{
						echo "Error: ". $sql ."". $conn->error;
					}
				}
			$conn->close();
		}
         
//header("Location:orderdetails.php");*/
	
?>
