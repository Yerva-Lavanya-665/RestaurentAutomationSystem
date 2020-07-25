<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
 <?php
 session_start();
$name=$_SESSION['varname'];
 //echo $name;
  $_SESSION['varname2']=$name;
   $_SESSION['varname3']=$name;
 ?>
<title> RAS</title>
<frameset cols="24%,76%">
  <frame src="Udetails.php" name="pageleft">
  <?php if(strcmp($name,"manager")==0){?>
	
		 <frame src="Manager.php" name="pageright">
	
	<?php }?>
	 <?php if(strcmp($name,"manager")!=0){?>
	
		 <frame src="orderdetails.php" name="pageright">
	
	<?php }?>
</frameset>
</html>

