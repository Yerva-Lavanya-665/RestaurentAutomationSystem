<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Three DIVs</title>
<style type="text/css">
div.container {width:900px; margin:auto}
div.left {float:left; width:278px; padding:10px;background:#eef;border:1px dotted #0f0;}
div.center {float:left; width:278px; padding:10px;background:#fee;border:1px dotted #f00;}
div.right {float:right; width:278px; padding:10px;background:#efe;border:1px dotted #00f;}
div.clear{width:100&#37;; clear:both;}
th{
        text-align:left;
}

.bg{
  /* The image used */
  background-image: url("piz.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body class="bg">

<?php
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
//print_r($ar);
?>
 <table cellpadding="3" width="30%" align="left"
	cellspacing="2">
 	<tr>
		<td colspan=2>
		<center><font size=4><b>Menu</b></font></center>
		</td>
		
	</tr>

 	<?php for($x=0;$x<$result->num_rows;$x++){?>
 		<tr>
 			 <td><?php printf ("%s \n",$ar[$x]);?></td>
              	 	 <td><?php printf ("%s \n",$iar[$x]);?>&#x20B9;</td>
 		</tr>
 	<?php } ?>
 	
 </table>
 </body>
</html>
 <!--
<div class="container" >
 <div class="left">
   <h1>Veg Items</h1>
   <table style="width:100%">
        <tr>
                <th>Item Name</th>
                <th>Price</th>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[0]);?></td>
                <td><?php printf ("%s \n",$iar[0]);?>rs/-</td>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[1]);?></td>
                <td><?php printf ("%s \n",$iar[1]);?>rs/-</td>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[2]);?></td>
                <td><?php printf ("%s \n",$iar[2]);?>rs/-</td>
        </tr>
        </table>
 </div>
 <div class="container" >
         <div class="left">
        <h1>Nonveg Items</h1>
   <table style="width:100%">
        <tr>
                <th>Item Name</th>
                <th>Price</th>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[3]);?></td>
                <td><?php printf ("%s \n",$iar[3]);?>rs/-</td>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[4]);?></td>
                <td><?php printf ("%s \n",$iar[4]);?>rs/-</td>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[5]);?></td>
                <td><?php printf ("%s \n",$iar[5]);?>rs-/</td>
        </tr>
        </table>
 </div>
 <div class="container" >
         <div class="left">
        <h1>Nonveg Items</h1>
   <table style="width:100%">
        <tr>
                <th>Item Name</th>
                <th>Price</th>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[6]);?></td>
                <td><?php printf ("%s \n",$iar[6]);?>rs/-</td>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[7]);?></td>
                <td><?php printf ("%s \n",$iar[7]);?>rs/-</td>
        </tr>
        <tr>
                <td><?php printf ("%s \n",$ar[8]);?></td>
                <td><?php printf ("%s \n",$iar[8]);?>rs-/</td>
        </tr>
        </table>
 </div>-->
