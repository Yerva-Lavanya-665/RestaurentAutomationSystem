<html>
<title>sindhu</title>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<style>
#sin{background-color:;font-family:purisal;color:deeppink;font-size:30}
.bg{
  /* The image used */
  background-image: url("john.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: left;
  background-repeat: no-repeat;
  background-size: cover;
}
.button{
background-color:#F0E68C;
border-radius:12px;
box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
<body class="bg" ><center>
<!--<h1 id="sin">User profile</h1></center></br>-->
<p id="sin">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Welcome</b> </br>
 <?php
 session_start();
$name=$_SESSION['varname2'];
$_SESSION['name']=$name; ?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size=6 color=deeppink style="Lobster Two" face="Lobster Two,Lobster Two,Lobster Two"><?php printf("%s \n", $name)?></font>

 </p>
 <script lang="javascript" type="text/javascript">
		var i=0;
		while(i<=23)
			{
			document.write("<br>");
			i++;
			}
	</script>
<form method="post" action="logout.php">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="logout" class="button">
</form>
</body>
</html>
