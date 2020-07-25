<html>
<title>sindhu</title>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="validate_order.js"></script>
</head>
<style>
#sin{border-radius:100px 200px;height:1000px:width:3000px;font-family:"Lobster Two";color:#800080;font-size:45}
* {
	box-sizing: border-box;
  }
.column{
	float:left;
	width:50%;
	padding:10px;
	color:#800080;
	
	}
.row:after {
	content:"";
	display:table;
	clear:both;
	}
.button{
background-color:#F0E68C;
border-radius:12px;
box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
 .bg{
background-color:#BDB768;
}
</style>
<body class="bg"><center>

<?php
 session_start();
$name=$_SESSION['varname3'];
$_SESSION['varname4']=$name;


$ar=array();
$iar=array();
$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "restuarant";
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
			$sql = "SELECT * FROM Menu";
			$result=$conn->query($sql);
			if ($result->num_rows>0){
					while($row=mysqli_fetch_row($result))
						{
						array_push($ar,$row[0]);
						array_push($iar,$row[1]);
						}
				}
			$conn->close();
		}
 ?>
 <h2 id="sin">You can edit menu</h2>
 <div class="row">
 	<div class="column">
 	
 		<h><b>Current menu</b></h>
 		 <table cellpadding="3" width="60%"  align="center"
	cellspacing="2">
 		<?php for($x=0,$y=1;$x<$result->num_rows;$x++,$y++){?>
 		<tr>
		<td><?php printf ("%s \n",$ar[$x]);?></td>
		<td><?php printf ("%s",$iar[$x]);?>&#x20B9;</td>
		</tr>
	<?php }?>
	</table>
 	</div>
 	<div class="column">
 		<form method="post" action="Add.php">
			<input type="text" name="additem" placeholder="Give new item name"></br>
			<input type="text" name="addcost" placeholder="New item price"></br>
			<input type="submit" value="Add Item" class="button" ></br>
		</form>
		<form method="post" action="Del.php">
			<input type="text" name="delitem" placeholder="Item to be deleted"></br>
			<input type="submit" value="Delete item" class="button"></br>
		</form>
 	</div>
 </div>
</body>
</html>
