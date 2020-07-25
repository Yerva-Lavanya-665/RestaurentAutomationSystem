<html>
<title>sindhu</title>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="validate_order.js"></script>
</head>
<style>
#sin{border-radius:100px 200px;height:1000px:width:3000px;font-family:"Lobster Two";color:deeppink;font-size:45}
.bg{
  /* The image used */
  background-image: url("ice.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.button{
background-color:#F0E68C;
border-radius:12px;
box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
</style>
<body class="bg"><center>

<?php
 session_start();
$name=$_SESSION['varname3'];
// printf("%s \n", $name);
$_SESSION['varname4']=$name;


$ar=array();
$iar=array();
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
		}
 ?>
<i><h1 id="sin"><font size=35>O</font>rder now!!</h1></i></center>
<form action="orderdb.php" name="order" method="post" >
 <table cellpadding="3" width="20%"  align="left"
	cellspacing="2">
	<tr>
		<td colspan=2>
		<center><font size=6 color=#A52A2A style="Lobster Two" face="Lobster Two,Lobster Two,Lobster Two"><b>Choose orders</b></font></center>
		</td>
		
	</tr>

	<?php for($x=0,$y=1;$x<$result->num_rows;$x++,$y++){?>
	
		<tr>
		<td><?php printf ("%s \n",$ar[$x]);?></td>
		<td><input type = 'text' name = 'name<?php echo $y; ?>' placeholder="<?php printf ("%s &#x20B9;\n",$iar[$x]);?>"></td>
		
	</tr>
	
	<?php }?>
	
	
	</tr>
	
	<tr>
		<td><input type="submit" value="place order" onclick="validate_order()" class="button"/></td>
		
		
		<td><a href="print.php">
   			<input type="button" value="print bill" class="button" />
			</a></td>
		
	</tr>

	
</table>
</form>
</body>
</html>
	<!--<tr>
	
	 <input type=text name="sindhu" id="dosa" size="30" placeholder="<?=$iar[$x]?>"
		<td>Dosa</td>
		<td><input type=text name="dosa" id="dosa" size="30" ></td>
	</tr>
	
	<tr>
		<td>Idly</td>
		<td><input type=text name="idly" id="idly" size="30" ></td>
	</tr>
	<tr>
		<td>Vada</td>
		<td><input type=text name="vada" id="vada" size="30"></td>
	</tr>
	<tr>
		<td>Icecream</td>
		<td><input type=text name="ice" id="ice" size="30" ></td>
	</tr>
	<tr>
		<td>Puri</td>
		<td><input type=text name="puri" id="puri" size="30"></td>
	</tr>
	<tr>
		<td>Cooldrink</td>
		<td><input type=text name="cool" id="cool" size="30" ></td>
		<!--<td ><button onclick="validate_order()"> place order</button></td><!--<input type="submit" value="Place order" -->
	
