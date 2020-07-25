<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  <title>Blank Web Page</title>

    <link rel="stylesheet" type="text/css" href="css/css.css"> -->

</head>
 <style>
  .bg{
background-color:#8DD8E6;
}
  </style>
<body class="bg">
<?php
$n=0;
 session_start();
$name=$_SESSION['varname4'];
$item=array();
$price=array();
$qnty=array();
$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "restuarant";
		// Create connection
		$conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname);
		//$conn = new mysqli ($host,$dbname);
		if ($conn===false){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
			$sql = "SELECT * FROM Orders where name='{$name}'";
			if($result=mysqli_query($conn,$sql))
				{
				$n=mysqli_num_rows($result);
			if (mysqli_num_rows($result)>0){
					//while($row=$result->fetch_assoc())
					while($row=mysqli_fetch_array($result))
						{
						array_push($item,$row[2]);
						array_push($price,$row[3]);
						array_push($qnty,$row[4]);
						//printf ("%s \n",$row[0]);
						}
				}
			$conn->close();
			}
		}
//print_r($ar);
?>
<center>
<font size=4 color=#A52A2A style="Lobster Two" face="Purisa,Purisa,Purisa"><b>YOUR ORDER DETAILS</b></font>
</center>
 <table style="width:100%">
 	<?php 
 	for($x=0;$x<$n;$x++){?>
 		<tr>
 			 <td><?php printf ("%s \n",$item[$x]);?></td>
              	 	 <td><?php printf ("%s \n",$price[$x]);?>&#x20B9;</td>
              	 	  <td><?php printf ("%s \n",$qnty[$x]);?></td>
              	 	  <td><?php printf ("%s \n",$qnty[$x]*$price[$x]);?>&#x20B9;</td>
 		</tr>
 	<?php }
 	$sum=0;
 	 for($x=0;$x<$n;$x++) 
 	 	{
 	 	$sum=$sum+$qnty[$x]*$price[$x];
 	 	}?>
 	 <tr>	
 	 <td></td>
 	 <td></td>
 	 <td></td>
 	 <td >
		<font size=4><b><?php printf (" Total %s \n",$sum);?>&#x20B9;</b></font>
		</td>
 	</tr>
 </table>
<script type="text/javascript" src="js/js.js"></script>

</body>
